<?php

declare(strict_types=1);

namespace PagarmeApiSDKLib\Mock;

use PagarmeApiSDKLib\Models\GetSubscriptionResponse;
use PagarmeApiSDKLib\Models\GetChargeResponse;
use PagarmeApiSDKLib\Models\GetOrderResponse;
use PagarmeApiSDKLib\Models\GetInvoiceResponse;

class MockWebhookDispatcher
{
    private static ?string $webhookUrl = null;
    private static bool $enabled = false;
    private static ?string $accountId = null;
    private static ?string $accountName = null;

    public static function configure(?string $url, ?string $accountId = null, ?string $accountName = null): void
    {
        self::$webhookUrl = $url;
        self::$enabled = !empty($url);
        self::$accountId = $accountId ?? 'acc_mock_stress_test';
        self::$accountName = $accountName ?? 'Mock Stress Test';
    }

    public static function isEnabled(): bool
    {
        return self::$enabled && !empty(self::$webhookUrl);
    }

    public static function getUrl(): ?string
    {
        return self::$webhookUrl;
    }

    public static function dispatch(string $eventType, array $data): void
    {
        if (!self::isEnabled()) {
            return;
        }

        $payload = [
            'id' => 'hook_' . bin2hex(random_bytes(8)),
            'account' => [
                'id' => self::$accountId ?? 'acc_mock_stress_test',
                'name' => self::$accountName ?? 'Mock Stress Test',
            ],
            'type' => $eventType,
            'created_at' => (new \DateTime())->format('Y-m-d\TH:i:s'),
            'data' => $data,
        ];

        self::sendWebhook(self::$webhookUrl, $payload);
    }

    /**
     * Dispatch charge.paid webhook with FULL charge payload
     * matching the real Pagar.me webhook structure.
     *
     * The seller-greenn-back webhook handler accesses:
     * - $payload['id'] (charge id / transaction_id)
     * - $payload['code']
     * - $payload['status']
     * - $payload['amount'], $payload['paid_amount']
     * - $payload['payment_method']
     * - $payload['paid_at'], $payload['updated_at']
     * - $payload['customer'] (full object with email, name, document, phones)
     * - $payload['order'] (with metadata)
     * - $payload['metadata'] (with sales.0.id etc)
     * - $payload['invoice'] (with subscription_id)
     * - $payload['subscription_id']
     * - $payload['last_transaction'] (with card, acquirer info)
     */
    public static function dispatchChargePaid(GetChargeResponse $charge): void
    {
        self::dispatch('charge.paid', self::serializeCharge($charge));
    }

    public static function dispatchSubscriptionCreated(GetSubscriptionResponse $subscription): void
    {
        self::dispatch('subscription.created', self::serializeSubscription($subscription));
    }

    public static function dispatchSubscriptionCanceled(GetSubscriptionResponse $subscription): void
    {
        self::dispatch('subscription.canceled', self::serializeSubscription($subscription));
    }

    public static function dispatchOrderPaid(GetOrderResponse $order): void
    {
        self::dispatch('order.paid', self::serializeOrder($order));
    }

    public static function dispatchInvoiceCreated(GetInvoiceResponse $invoice): void
    {
        $invoiceData = json_decode(json_encode($invoice->jsonSerialize()), true) ?? [];
        self::dispatch('invoice.created', $invoiceData);
    }

    // ========== SERIALIZERS ==========

    private static function serializeCharge(GetChargeResponse $charge): array
    {
        $now = (new \DateTime())->format('Y-m-d\TH:i:s');
        $customer = $charge->getCustomer();
        $lastTx = $charge->getLastTransaction();

        $data = [
            'id' => $charge->getId(),
            'code' => $charge->getCode(),
            'gateway_id' => $charge->getGatewayId(),
            'amount' => $charge->getAmount(),
            'paid_amount' => $charge->getPaidAmount(),
            'status' => $charge->getStatus(),
            'currency' => $charge->getCurrency() ?? 'BRL',
            'payment_method' => $charge->getPaymentMethod(),
            'paid_at' => $charge->getPaidAt() ? $charge->getPaidAt()->format('Y-m-d\TH:i:s') : $now,
            'created_at' => $charge->getCreatedAt() ? $charge->getCreatedAt()->format('Y-m-d\TH:i:s') : $now,
            'updated_at' => $charge->getUpdatedAt() ? $charge->getUpdatedAt()->format('Y-m-d\TH:i:s') : $now,
            'metadata' => $charge->getMetadata() ?? [],
        ];

        if ($customer) {
            $phones = $customer->getPhones();
            $mobilePhone = $phones ? $phones->getMobilePhone() : null;

            $data['customer'] = [
                'id' => $customer->getId(),
                'name' => $customer->getName(),
                'email' => $customer->getEmail(),
                'code' => $customer->getCode() ?? '',
                'document' => $customer->getDocument(),
                'type' => $customer->getType() ?? 'individual',
                'delinquent' => $customer->getDelinquent() ?? false,
                'created_at' => $customer->getCreatedAt() ? $customer->getCreatedAt()->format('Y-m-d\TH:i:s') : $now,
                'updated_at' => $customer->getUpdatedAt() ? $customer->getUpdatedAt()->format('Y-m-d\TH:i:s') : $now,
                'phones' => [
                    'mobile_phone' => $mobilePhone ? [
                        'country_code' => $mobilePhone->getCountryCode() ?? '55',
                        'area_code' => $mobilePhone->getAreaCode() ?? '11',
                        'number' => $mobilePhone->getNumber() ?? '999999999',
                    ] : [
                        'country_code' => '55',
                        'area_code' => '11',
                        'number' => '999999999',
                    ],
                ],
                'metadata' => $customer->getMetadata() ?? [],
            ];
        }

        if ($lastTx) {
            $card = method_exists($lastTx, 'getCard') ? $lastTx->getCard() : null;
            $data['last_transaction'] = [
                'id' => $lastTx->getId(),
                'transaction_type' => $lastTx->getTransactionType() ?? 'credit_card',
                'gateway_id' => $lastTx->getGatewayId(),
                'amount' => $lastTx->getAmount(),
                'status' => $lastTx->getStatus(),
                'success' => $lastTx->getSuccess() ?? true,
                'installments' => method_exists($lastTx, 'getInstallments') ? $lastTx->getInstallments() : 1,
                'acquirer_name' => method_exists($lastTx, 'getAcquirerName') ? $lastTx->getAcquirerName() : 'pagarme',
                'acquirer_tid' => method_exists($lastTx, 'getAcquirerTid') ? $lastTx->getAcquirerTid() : $lastTx->getGatewayId(),
                'acquirer_nsu' => method_exists($lastTx, 'getAcquirerNsu') ? $lastTx->getAcquirerNsu() : $lastTx->getGatewayId(),
                'acquirer_auth_code' => method_exists($lastTx, 'getAcquirerAuthCode') ? $lastTx->getAcquirerAuthCode() : '000000',
                'acquirer_message' => method_exists($lastTx, 'getAcquirerMessage') ? $lastTx->getAcquirerMessage() : 'Transação aprovada com sucesso',
                'acquirer_return_code' => method_exists($lastTx, 'getAcquirerReturnCode') ? $lastTx->getAcquirerReturnCode() : '0000',
                'operation_type' => method_exists($lastTx, 'getOperationType') ? $lastTx->getOperationType() : 'auth_and_capture',
                'created_at' => $lastTx->getCreatedAt() ? $lastTx->getCreatedAt()->format('Y-m-d\TH:i:s') : $now,
                'updated_at' => $lastTx->getUpdatedAt() ? $lastTx->getUpdatedAt()->format('Y-m-d\TH:i:s') : $now,
            ];

            if ($card) {
                $billingAddr = $card->getBillingAddress();
                $data['last_transaction']['card'] = [
                    'id' => $card->getId(),
                    'first_six_digits' => $card->getFirstSixDigits(),
                    'last_four_digits' => $card->getLastFourDigits(),
                    'brand' => $card->getBrand(),
                    'holder_name' => $card->getHolderName(),
                    'exp_month' => $card->getExpMonth(),
                    'exp_year' => $card->getExpYear(),
                    'status' => $card->getStatus(),
                    'type' => $card->getType() ?? 'credit',
                ];

                if ($billingAddr) {
                    $data['last_transaction']['card']['billing_address'] = [
                        'street' => $billingAddr->getStreet(),
                        'number' => $billingAddr->getNumber(),
                        'complement' => $billingAddr->getComplement() ?? '',
                        'zip_code' => $billingAddr->getZipCode(),
                        'neighborhood' => $billingAddr->getNeighborhood(),
                        'city' => $billingAddr->getCity(),
                        'state' => $billingAddr->getState(),
                        'country' => $billingAddr->getCountry(),
                    ];
                }
            }
        }

        return $data;
    }

    private static function serializeSubscription(GetSubscriptionResponse $subscription): array
    {
        $now = (new \DateTime())->format('Y-m-d\TH:i:s');
        $customer = $subscription->getCustomer();
        $card = $subscription->getCard();
        $cycle = $subscription->getCurrentCycle();

        $data = [
            'id' => $subscription->getId(),
            'code' => $subscription->getCode(),
            'start_at' => $subscription->getStartAt() ? $subscription->getStartAt()->format('Y-m-d\TH:i:s') : $now,
            'interval' => $subscription->getInterval() ?? 'month',
            'interval_count' => $subscription->getIntervalCount() ?? 1,
            'billing_type' => $subscription->getBillingType() ?? 'prepaid',
            'payment_method' => $subscription->getPaymentMethod() ?? 'credit_card',
            'currency' => $subscription->getCurrency() ?? 'BRL',
            'installments' => $subscription->getInstallments() ?? 1,
            'status' => $subscription->getStatus(),
            'statement_descriptor' => $subscription->getStatementDescriptor(),
            'created_at' => $subscription->getCreatedAt() ? $subscription->getCreatedAt()->format('Y-m-d\TH:i:s') : $now,
            'updated_at' => $subscription->getUpdatedAt() ? $subscription->getUpdatedAt()->format('Y-m-d\TH:i:s') : $now,
            'metadata' => $subscription->getMetadata() ?? [],
        ];

        if ($cycle) {
            $data['current_cycle'] = [
                'id' => $cycle->getId(),
                'start_at' => $cycle->getStartAt() ? $cycle->getStartAt()->format('Y-m-d\TH:i:s') : $now,
                'end_at' => $cycle->getEndAt() ? $cycle->getEndAt()->format('Y-m-d\TH:i:s') : $now,
                'billing_at' => $cycle->getBillingAt() ? $cycle->getBillingAt()->format('Y-m-d\TH:i:s') : $now,
                'status' => $cycle->getStatus(),
                'cycle' => $cycle->getCycle(),
            ];
        }

        if ($customer) {
            $phones = $customer->getPhones();
            $mobilePhone = $phones ? $phones->getMobilePhone() : null;
            $data['customer'] = [
                'id' => $customer->getId(),
                'name' => $customer->getName(),
                'email' => $customer->getEmail(),
                'document' => $customer->getDocument(),
                'type' => $customer->getType() ?? 'individual',
                'phones' => [
                    'mobile_phone' => $mobilePhone ? [
                        'country_code' => $mobilePhone->getCountryCode() ?? '55',
                        'area_code' => $mobilePhone->getAreaCode() ?? '11',
                        'number' => $mobilePhone->getNumber() ?? '999999999',
                    ] : null,
                ],
            ];
        }

        if ($card) {
            $data['card'] = [
                'id' => $card->getId(),
                'first_six_digits' => $card->getFirstSixDigits(),
                'last_four_digits' => $card->getLastFourDigits(),
                'brand' => $card->getBrand(),
                'holder_name' => $card->getHolderName(),
                'exp_month' => $card->getExpMonth(),
                'exp_year' => $card->getExpYear(),
                'status' => $card->getStatus(),
                'type' => $card->getType() ?? 'credit',
            ];
        }

        return $data;
    }

    private static function serializeOrder(GetOrderResponse $order): array
    {
        $now = (new \DateTime())->format('Y-m-d\TH:i:s');

        $data = [
            'id' => $order->getId(),
            'code' => $order->getCode(),
            'amount' => $order->getAmount(),
            'currency' => $order->getCurrency() ?? 'BRL',
            'closed' => $order->getClosed() ?? true,
            'status' => $order->getStatus(),
            'created_at' => $order->getCreatedAt() ? $order->getCreatedAt()->format('Y-m-d\TH:i:s') : $now,
            'updated_at' => $order->getUpdatedAt() ? $order->getUpdatedAt()->format('Y-m-d\TH:i:s') : $now,
            'metadata' => $order->getMetadata() ?? [],
        ];

        $customer = $order->getCustomer();
        if ($customer) {
            $phones = $customer->getPhones();
            $mobilePhone = $phones ? $phones->getMobilePhone() : null;
            $data['customer'] = [
                'id' => $customer->getId(),
                'name' => $customer->getName(),
                'email' => $customer->getEmail(),
                'code' => $customer->getCode() ?? '',
                'document' => $customer->getDocument(),
                'type' => $customer->getType() ?? 'individual',
                'phones' => [
                    'mobile_phone' => $mobilePhone ? [
                        'country_code' => $mobilePhone->getCountryCode() ?? '55',
                        'area_code' => $mobilePhone->getAreaCode() ?? '11',
                        'number' => $mobilePhone->getNumber() ?? '999999999',
                    ] : null,
                ],
                'metadata' => $customer->getMetadata() ?? [],
            ];
        }

        $charges = $order->getCharges();
        if ($charges && !empty($charges)) {
            $data['charges'] = [];
            foreach ($charges as $charge) {
                $data['charges'][] = self::serializeCharge($charge);
            }
        }

        return $data;
    }

    // ========== HTTP ==========

    private static function sendWebhook(string $url, array $payload): void
    {
        $jsonPayload = json_encode($payload);

        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $jsonPayload,
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'X-Hub-Signature: mock-stress-test',
                'User-Agent: PagarMe-Webhooks/1.0',
            ],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 5,
            CURLOPT_CONNECTTIMEOUT => 3,
        ]);

        curl_exec($ch);
        curl_close($ch);
    }
}
