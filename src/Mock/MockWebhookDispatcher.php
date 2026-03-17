<?php

declare(strict_types=1);

namespace PagarmeApiSDKLib\Mock;

class MockWebhookDispatcher
{
    private static ?string $webhookUrl = null;
    private static bool $enabled = false;

    public static function configure(?string $url): void
    {
        self::$webhookUrl = $url;
        self::$enabled = !empty($url);
    }

    public static function isEnabled(): bool
    {
        return self::$enabled && !empty(self::$webhookUrl);
    }

    public static function getUrl(): ?string
    {
        return self::$webhookUrl;
    }

    public static function dispatch(string $eventType, array $data, ?string $accountId = null): void
    {
        if (!self::isEnabled()) {
            return;
        }

        $payload = [
            'id' => 'hook_mock_' . bin2hex(random_bytes(8)),
            'type' => $eventType,
            'created_at' => (new \DateTime())->format('Y-m-d\TH:i:s\Z'),
            'data' => $data,
        ];

        if ($accountId) {
            $payload['account'] = ['id' => $accountId];
        }

        self::sendAsync(self::$webhookUrl, $payload);
    }

    public static function dispatchChargePaid(array $chargeData, ?string $accountId = null): void
    {
        self::dispatch('charge.paid', $chargeData, $accountId);
    }

    public static function dispatchSubscriptionCreated(array $subscriptionData, ?string $accountId = null): void
    {
        self::dispatch('subscription.created', $subscriptionData, $accountId);
    }

    public static function dispatchSubscriptionCanceled(array $subscriptionData, ?string $accountId = null): void
    {
        self::dispatch('subscription.canceled', $subscriptionData, $accountId);
    }

    public static function dispatchOrderPaid(array $orderData, ?string $accountId = null): void
    {
        self::dispatch('order.paid', $orderData, $accountId);
    }

    public static function dispatchInvoiceCreated(array $invoiceData, ?string $accountId = null): void
    {
        self::dispatch('invoice.created', $invoiceData, $accountId);
    }

    private static function sendAsync(string $url, array $payload): void
    {
        $jsonPayload = json_encode($payload);

        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $jsonPayload,
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'X-Hub-Signature: mock-stress-test',
                'User-Agent: PagarMe-MockSDK/1.0',
            ],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 5,
            CURLOPT_CONNECTTIMEOUT => 3,
        ]);

        curl_exec($ch);
        curl_close($ch);
    }
}
