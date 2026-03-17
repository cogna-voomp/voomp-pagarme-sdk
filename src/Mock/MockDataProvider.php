<?php

declare(strict_types=1);

namespace PagarmeApiSDKLib\Mock;

use DateTime;
use PagarmeApiSDKLib\Models\GetSubscriptionResponse;
use PagarmeApiSDKLib\Models\GetSubscriptionItemResponse;
use PagarmeApiSDKLib\Models\GetChargeResponse;
use PagarmeApiSDKLib\Models\GetPlanResponse;
use PagarmeApiSDKLib\Models\GetPlanItemResponse;
use PagarmeApiSDKLib\Models\GetCustomerResponse;
use PagarmeApiSDKLib\Models\GetCardResponse;
use PagarmeApiSDKLib\Models\GetOrderResponse;
use PagarmeApiSDKLib\Models\GetOrderItemResponse;
use PagarmeApiSDKLib\Models\GetInvoiceResponse;
use PagarmeApiSDKLib\Models\GetInvoiceItemResponse;
use PagarmeApiSDKLib\Models\GetPeriodResponse;
use PagarmeApiSDKLib\Models\GetAddressResponse;
use PagarmeApiSDKLib\Models\GetBillingAddressResponse;
use PagarmeApiSDKLib\Models\GetPhoneResponse;
use PagarmeApiSDKLib\Models\GetPhonesResponse;
use PagarmeApiSDKLib\Models\GetPricingSchemeResponse;
use PagarmeApiSDKLib\Models\GetCreditCardTransactionResponse;
use PagarmeApiSDKLib\Models\GetRecipientResponse;
use PagarmeApiSDKLib\Models\GetBalanceResponse;
use PagarmeApiSDKLib\Models\GetPayableResponse;
use PagarmeApiSDKLib\Models\GetShippingResponse;
use PagarmeApiSDKLib\Models\GetSetupResponse;
use PagarmeApiSDKLib\Models\GetSubscriptionBoletoResponse;
use PagarmeApiSDKLib\Models\ListSubscriptionsResponse;
use PagarmeApiSDKLib\Models\ListChargesResponse;
use PagarmeApiSDKLib\Models\ListPlansResponse;
use PagarmeApiSDKLib\Models\ListCustomersResponse;
use PagarmeApiSDKLib\Models\ListOrderResponse;
use PagarmeApiSDKLib\Models\ListInvoicesResponse;
use PagarmeApiSDKLib\Models\ListCyclesResponse;
use PagarmeApiSDKLib\Models\ListCardsResponse;
use PagarmeApiSDKLib\Models\ListSubscriptionItemsResponse;
use PagarmeApiSDKLib\Models\ListRecipientResponse;
use PagarmeApiSDKLib\Models\ListPayablesResponse;
use PagarmeApiSDKLib\Models\ListChargeTransactionsResponse;
use PagarmeApiSDKLib\Models\PagingResponse;

class MockDataProvider
{
    // ========== BILLING ADDRESS ==========

    public static function billingAddress(): GetBillingAddressResponse
    {
        $addr = new GetBillingAddressResponse();
        $addr->setStreet('Bela Cintra');
        $addr->setNumber('1149');
        $addr->setComplement('');
        $addr->setZipCode('01415001');
        $addr->setNeighborhood('Consolação');
        $addr->setCity('São Paulo');
        $addr->setState('SP');
        $addr->setCountry('BR');
        $addr->setLine1('1149, Bela Cintra, Consolação');
        $addr->setLine2('');
        return $addr;
    }

    // ========== ADDRESS ==========

    public static function address(?string $customerId = null): GetAddressResponse
    {
        $addr = new GetAddressResponse();
        $addr->setId(MockIdGenerator::addressId());
        $addr->setStreet('Bela Cintra');
        $addr->setNumber('1149');
        $addr->setComplement('');
        $addr->setZipCode('01415001');
        $addr->setNeighborhood('Consolação');
        $addr->setCity('São Paulo');
        $addr->setState('SP');
        $addr->setCountry('BR');
        $addr->setStatus('active');
        $addr->setCreatedAt(new DateTime());
        $addr->setUpdatedAt(new DateTime());
        $addr->setLine1('1149, Bela Cintra, Consolação');
        $addr->setLine2('');
        return $addr;
    }

    // ========== PHONE ==========

    public static function phone(): GetPhoneResponse
    {
        $phone = new GetPhoneResponse();
        $phone->setCountryCode('55');
        $phone->setAreaCode('11');
        $phone->setNumber('999999999');
        return $phone;
    }

    public static function phones(): GetPhonesResponse
    {
        $phones = new GetPhonesResponse();
        $phones->setMobilePhone(self::phone());
        return $phones;
    }

    // ========== CUSTOMER ==========

    public static function customer(
        ?string $name = null,
        ?string $email = null,
        ?string $document = null,
        ?string $code = null,
        ?string $type = null
    ): GetCustomerResponse {
        $cus = new GetCustomerResponse();
        $cus->setId(MockIdGenerator::customerId());
        $cus->setName($name ?? 'Mock Customer Stress Test');
        $cus->setEmail($email ?? 'mock.stress@test.com');
        $cus->setDocument($document ?? '12345678900');
        $cus->setType($type ?? 'individual');
        $cus->setDelinquent(false);
        $cus->setCode($code ?? '');
        $cus->setCreatedAt(new DateTime());
        $cus->setUpdatedAt(new DateTime());
        $cus->setPhones(self::phones());
        $cus->setAddress(self::address());
        $cus->setMetadata([]);
        return $cus;
    }

    // ========== CARD ==========

    public static function card(
        ?string $holderName = null,
        ?string $number = null,
        ?int $expMonth = null,
        ?int $expYear = null
    ): GetCardResponse {
        $card = new GetCardResponse();
        $card->setId(MockIdGenerator::cardId());
        $card->setFirstSixDigits('520048');
        $card->setLastFourDigits('0236');
        $card->setBrand('Mastercard');
        $card->setHolderName($holderName ?? 'MOCK HOLDER NAME');
        $card->setExpMonth($expMonth ?? 12);
        $card->setExpYear($expYear ?? 2032);
        $card->setStatus('active');
        $card->setType('credit');
        $card->setCreatedAt(new DateTime());
        $card->setUpdatedAt(new DateTime());
        $card->setBillingAddress(self::billingAddress());
        return $card;
    }

    // ========== PRICING SCHEME ==========

    public static function pricingScheme(int $price = 10000): GetPricingSchemeResponse
    {
        $scheme = new GetPricingSchemeResponse();
        $scheme->setPrice($price);
        $scheme->setSchemeType('unit');
        return $scheme;
    }

    // ========== PLAN ITEM ==========

    public static function planItem(
        ?string $name = null,
        int $price = 10000,
        int $quantity = 1,
        ?int $cycles = null
    ): GetPlanItemResponse {
        $item = new GetPlanItemResponse();
        $item->setId(MockIdGenerator::planItemId());
        $item->setName($name ?? 'Mock Plan Item');
        $item->setDescription('');
        $item->setStatus('active');
        $item->setQuantity($quantity);
        $item->setCycles($cycles);
        $item->setPricingScheme(self::pricingScheme($price));
        $item->setCreatedAt(new DateTime());
        $item->setUpdatedAt(new DateTime());
        return $item;
    }

    // ========== PLAN ==========

    public static function plan(
        ?string $name = null,
        ?string $interval = null,
        ?int $intervalCount = null,
        ?array $items = null,
        ?array $metadata = null
    ): GetPlanResponse {
        $plan = new GetPlanResponse();
        $plan->setId(MockIdGenerator::planId());
        $plan->setName($name ?? 'Mock Stress Test Plan');
        $plan->setDescription($name ?? 'Mock Stress Test Plan');
        $plan->setUrl('');
        $plan->setStatementDescriptor(substr($name ?? 'MOCK PLAN', 0, 13));
        $plan->setInterval($interval ?? 'month');
        $plan->setIntervalCount($intervalCount ?? 1);
        $plan->setBillingType('prepaid');
        $plan->setPaymentMethods(['credit_card', 'boleto']);
        $plan->setInstallments([1]);
        $plan->setStatus('active');
        $plan->setCurrency('BRL');
        $plan->setCreatedAt(new DateTime());
        $plan->setUpdatedAt(new DateTime());
        $plan->setItems($items ?? [self::planItem($name)]);
        $plan->setMetadata($metadata ?? ['x' => 'x']);
        return $plan;
    }

    // ========== SUBSCRIPTION ITEM ==========

    public static function subscriptionItem(
        ?string $name = null,
        int $price = 10000,
        int $quantity = 1,
        ?int $cycles = null
    ): GetSubscriptionItemResponse {
        $item = new GetSubscriptionItemResponse();
        $item->setId(MockIdGenerator::subscriptionItemId());
        $item->setName($name ?? 'Mock Subscription Item');
        $item->setDescription('');
        $item->setStatus('active');
        $item->setQuantity($quantity);
        $item->setCycles($cycles ?? 30);
        $item->setPricingScheme(self::pricingScheme($price));
        $item->setCreatedAt(new DateTime());
        $item->setUpdatedAt(new DateTime());
        $item->setDiscounts([]);
        $item->setIncrements([]);
        return $item;
    }

    // ========== PERIOD / CYCLE ==========

    public static function period(int $cycleNumber = 1, ?string $status = null): GetPeriodResponse
    {
        $now = new DateTime();
        $endDate = (clone $now)->modify('+1 month')->modify('-1 second');

        $period = new GetPeriodResponse();
        $period->setId(MockIdGenerator::cycleId());
        $period->setStartAt($now);
        $period->setEndAt($endDate);
        $period->setBillingAt($now);
        $period->setStatus($status ?? 'billed');
        $period->setCycle($cycleNumber);
        $period->setDuration(2678399);
        $period->setCreatedAt($now->format('Y-m-d\TH:i:s\Z'));
        $period->setUpdatedAt($now->format('Y-m-d\TH:i:s\Z'));
        return $period;
    }

    // ========== CREDIT CARD TRANSACTION ==========

    public static function creditCardTransaction(
        int $amount = 10000,
        int $installments = 1,
        ?string $statementDescriptor = null,
        ?GetCardResponse $card = null
    ): GetCreditCardTransactionResponse {
        $gatewayId = MockIdGenerator::gatewayId();

        $tx = new GetCreditCardTransactionResponse();
        $tx->setGatewayId($gatewayId);
        $tx->setAmount($amount);
        $tx->setStatus('captured');
        $tx->setSuccess(true);
        $tx->setCreatedAt(new DateTime());
        $tx->setUpdatedAt(new DateTime());
        $tx->setTransactionType('credit_card');
        $tx->setStatementDescriptor($statementDescriptor ?? 'MOCK PAYMENT');
        $tx->setAcquirerName('pagarme');
        $tx->setAcquirerTid($gatewayId);
        $tx->setAcquirerNsu($gatewayId);
        $tx->setAcquirerAuthCode(MockIdGenerator::authCode());
        $tx->setAcquirerMessage('Transação aprovada com sucesso');
        $tx->setAcquirerReturnCode('0000');
        $tx->setOperationType('auth_and_capture');
        $tx->setInstallments($installments);
        $tx->setCard($card ?? self::card());
        return $tx;
    }

    // ========== CHARGE ==========

    public static function charge(
        int $amount = 10000,
        ?string $status = null,
        ?string $paymentMethod = null,
        ?string $code = null,
        ?GetCustomerResponse $customer = null,
        ?array $metadata = null,
        int $installments = 1,
        ?string $statementDescriptor = null,
        ?GetCardResponse $card = null
    ): GetChargeResponse {
        $now = new DateTime();
        $chargeStatus = $status ?? 'paid';

        $charge = new GetChargeResponse();
        $charge->setId(MockIdGenerator::chargeId());
        $charge->setCode($code ?? (string) random_int(1000000, 9999999));
        $charge->setGatewayId(MockIdGenerator::gatewayId());
        $charge->setAmount($amount);
        $charge->setStatus($chargeStatus);
        $charge->setCurrency('BRL');
        $charge->setPaymentMethod($paymentMethod ?? 'credit_card');
        $charge->setCreatedAt($now);
        $charge->setUpdatedAt($now);
        $charge->setCustomer($customer ?? self::customer());
        $charge->setMetadata($metadata ?? []);
        $charge->setLastTransaction(
            self::creditCardTransaction($amount, $installments, $statementDescriptor, $card)
        );

        if ($chargeStatus === 'paid') {
            $charge->setPaidAt($now);
            $charge->setPaidAmount($amount);
        }

        return $charge;
    }

    // ========== ORDER ITEM ==========

    public static function orderItem(
        ?string $description = null,
        int $amount = 10000,
        int $quantity = 1,
        ?string $code = null
    ): GetOrderItemResponse {
        $item = new GetOrderItemResponse();
        $item->setId(MockIdGenerator::orderItemId());
        $item->setDescription($description ?? 'Mock Product');
        $item->setAmount($amount);
        $item->setQuantity($quantity);
        $item->setStatus('active');
        $item->setCode($code ?? '');
        $item->setCreatedAt(new DateTime());
        $item->setUpdatedAt(new DateTime());
        return $item;
    }

    // ========== ORDER ==========

    public static function order(
        int $amount = 10000,
        ?string $status = null,
        ?GetCustomerResponse $customer = null,
        ?array $items = null,
        ?array $charges = null,
        ?array $metadata = null,
        ?string $code = null
    ): GetOrderResponse {
        $now = new DateTime();
        $cus = $customer ?? self::customer();
        $orderStatus = $status ?? 'paid';

        $order = new GetOrderResponse();
        $order->setId(MockIdGenerator::orderId());
        $order->setCode($code ?? (string) random_int(1000000, 9999999));
        $order->setAmount($amount);
        $order->setCurrency('BRL');
        $order->setClosed(true);
        $order->setItems($items ?? [self::orderItem(null, $amount)]);
        $order->setCustomer($cus);
        $order->setStatus($orderStatus);
        $order->setCreatedAt($now);
        $order->setUpdatedAt($now);
        $order->setClosedAt($now);
        $order->setCharges($charges ?? [self::charge($amount, $orderStatus === 'paid' ? 'paid' : 'pending', 'credit_card', null, $cus, $metadata)]);
        $order->setMetadata($metadata ?? []);
        return $order;
    }

    // ========== SHIPPING ==========

    public static function shipping(): GetShippingResponse
    {
        $shipping = new GetShippingResponse();
        $shipping->setAmount(1);
        $shipping->setDescription('N/A');
        $shipping->setRecipientName('N/A');
        $shipping->setRecipientPhone('N/A');
        $shipping->setAddress(self::address());
        return $shipping;
    }

    // ========== INVOICE ITEM ==========

    public static function invoiceItem(?string $name = null, int $amount = 10000, int $quantity = 1): GetInvoiceItemResponse
    {
        $item = new GetInvoiceItemResponse();
        $item->setName($name ?? 'Mock Invoice Item');
        $item->setDescription('');
        $item->setAmount($amount);
        $item->setQuantity($quantity);
        return $item;
    }

    // ========== INVOICE ==========

    public static function invoice(
        int $amount = 10000,
        ?string $status = null,
        ?string $paymentMethod = null,
        ?string $subscriptionId = null,
        ?GetCustomerResponse $customer = null,
        ?GetPeriodResponse $cycle = null,
        ?GetChargeResponse $charge = null,
        ?array $metadata = null,
        int $installments = 1
    ): GetInvoiceResponse {
        $now = new DateTime();
        $dueAt = (clone $now)->setTime(23, 59, 59);

        $inv = new GetInvoiceResponse();
        $inv->setId(MockIdGenerator::invoiceId());
        $inv->setCode(MockIdGenerator::invoiceCode());
        $inv->setUrl('/invoices/' . $inv->getId());
        $inv->setAmount($amount);
        $inv->setStatus($status ?? 'paid');
        $inv->setPaymentMethod($paymentMethod ?? 'credit_card');
        $inv->setCreatedAt($now);
        $inv->setUpdatedAt($now);
        $inv->setDueAt($dueAt);
        $inv->setTotalDiscount(0);
        $inv->setTotalIncrement(0);
        $inv->setInstallments($installments);
        $inv->setItems([self::invoiceItem(null, $amount)]);
        $inv->setCustomer($customer ?? self::customer());
        $inv->setBillingAddress(self::billingAddress());
        $inv->setShipping(self::shipping());
        $inv->setMetadata($metadata ?? []);
        $inv->setSubscriptionId($subscriptionId);

        if ($cycle) {
            $inv->setCycle($cycle);
        }

        if ($charge) {
            $inv->setCharge($charge);
        } else {
            $mockCharge = self::charge($amount, $status ?? 'paid', $paymentMethod ?? 'credit_card');
            $mockCharge->setRecurrencyCycle('first');
            $inv->setCharge($mockCharge);
        }

        return $inv;
    }

    // ========== SUBSCRIPTION ==========

    public static function subscription(
        ?string $planId = null,
        ?string $paymentMethod = null,
        ?int $amount = null,
        ?GetCustomerResponse $customer = null,
        ?GetCardResponse $card = null,
        ?array $items = null,
        ?array $metadata = null,
        ?string $code = null,
        ?string $statementDescriptor = null,
        int $installments = 1,
        ?int $cycles = null,
        ?string $interval = null,
        ?int $intervalCount = null,
        ?string $billingType = null
    ): GetSubscriptionResponse {
        $now = new DateTime();
        $nextBilling = (clone $now)->modify('+1 month');
        $resolvedAmount = $amount ?? 10000;

        $sub = new GetSubscriptionResponse();
        $sub->setId(MockIdGenerator::subscriptionId());
        $sub->setCode($code ?? (string) random_int(1000000, 9999999));
        $sub->setStartAt($now);
        $sub->setInterval($interval ?? 'month');
        $sub->setIntervalCount($intervalCount ?? 1);
        $sub->setBillingType($billingType ?? 'prepaid');
        $sub->setPaymentMethod($paymentMethod ?? 'credit_card');
        $sub->setCurrency('BRL');
        $sub->setInstallments($installments);
        $sub->setStatus('active');
        $sub->setStatementDescriptor($statementDescriptor ?? 'MOCK PAYMENT');
        $sub->setBoletoDueDays(3);
        $sub->setCreatedAt($now);
        $sub->setUpdatedAt($now);
        $sub->setNextBillingAt($nextBilling);

        $cus = $customer ?? self::customer();
        $sub->setCustomer($cus);

        $mockCard = $card ?? self::card();
        $sub->setCard($mockCard);

        $cycle = self::period(1, 'billed');
        $sub->setCurrentCycle($cycle);

        if ($planId) {
            $plan = new GetPlanResponse();
            $plan->setId($planId);
            $sub->setPlan($plan);
        } else {
            $sub->setPlan(self::plan($statementDescriptor));
        }

        $sub->setItems($items ?? [
            self::subscriptionItem($statementDescriptor, $resolvedAmount, 1, $cycles)
        ]);

        $sub->setMetadata($metadata ?? []);
        $sub->setBoleto(new GetSubscriptionBoletoResponse());
        $sub->setDiscounts([]);
        $sub->setIncrements([]);

        return $sub;
    }

    // ========== RECIPIENT ==========

    public static function recipient(): GetRecipientResponse
    {
        $rec = new GetRecipientResponse();
        $rec->setId(MockIdGenerator::recipientId());
        $rec->setName('Mock Recipient');
        $rec->setEmail('mock@recipient.com');
        $rec->setDocument('12345678000100');
        $rec->setType('company');
        $rec->setStatus('active');
        $rec->setCreatedAt(new DateTime());
        $rec->setUpdatedAt(new DateTime());
        return $rec;
    }

    // ========== BALANCE ==========

    public static function balance(?string $recipientId = null): GetBalanceResponse
    {
        $balance = new GetBalanceResponse();
        $balance->setCurrency('BRL');
        $balance->setAvailableAmount(1000000);
        $balance->setWaitingFundsAmount(500000);
        $balance->setTransferredAmount(2000000);

        $rec = self::recipient();
        if ($recipientId) {
            $rec->setId($recipientId);
        }
        $balance->setRecipient($rec);
        return $balance;
    }

    // ========== PAYABLE ==========

    public static function payable(?string $chargeId = null): GetPayableResponse
    {
        $now = new DateTime();
        $payable = new GetPayableResponse();
        $payable->setId(MockIdGenerator::payableId());
        $payable->setStatus('waiting_funds');
        $payable->setAmount(10000);
        $payable->setFee(350);
        $payable->setAnticipationFee(0);
        $payable->setFraudCoverageFee(0);
        $payable->setInstallment(1);
        $payable->setGatewayId(MockIdGenerator::gatewayId());
        $payable->setChargeId($chargeId ?? MockIdGenerator::chargeId());
        $payable->setCreatedAt($now);
        $payable->setPaymentDate($now);
        return $payable;
    }

    // ========== PAGING ==========

    public static function paging(int $total = 1): PagingResponse
    {
        $paging = new PagingResponse();
        $paging->setTotal($total);
        return $paging;
    }

    // ========== LIST WRAPPERS ==========

    public static function listSubscriptions(array $data, int $total = 1): ListSubscriptionsResponse
    {
        $list = new ListSubscriptionsResponse();
        $list->setData($data);
        $list->setPaging(self::paging($total));
        return $list;
    }

    public static function listCharges(array $data, int $total = 1): ListChargesResponse
    {
        $list = new ListChargesResponse();
        $list->setData($data);
        $list->setPaging(self::paging($total));
        return $list;
    }

    public static function listPlans(array $data, int $total = 1): ListPlansResponse
    {
        $list = new ListPlansResponse();
        $list->setData($data);
        $list->setPaging(self::paging($total));
        return $list;
    }

    public static function listCustomers(array $data, int $total = 1): ListCustomersResponse
    {
        $list = new ListCustomersResponse();
        $list->setData($data);
        $list->setPaging(self::paging($total));
        return $list;
    }

    public static function listOrders(array $data, int $total = 1): ListOrderResponse
    {
        $list = new ListOrderResponse();
        $list->setData($data);
        $list->setPaging(self::paging($total));
        return $list;
    }

    public static function listInvoices(array $data, int $total = 1): ListInvoicesResponse
    {
        $list = new ListInvoicesResponse();
        $list->setData($data);
        $list->setPaging(self::paging($total));
        return $list;
    }

    public static function listCycles(array $data, int $total = 1): ListCyclesResponse
    {
        $list = new ListCyclesResponse();
        $list->setData($data);
        $list->setPaging(self::paging($total));
        return $list;
    }

    public static function listCards(array $data, int $total = 1): ListCardsResponse
    {
        $list = new ListCardsResponse();
        $list->setData($data);
        $list->setPaging(self::paging($total));
        return $list;
    }

    public static function listSubscriptionItems(array $data, int $total = 1): ListSubscriptionItemsResponse
    {
        $list = new ListSubscriptionItemsResponse();
        $list->setData($data);
        $list->setPaging(self::paging($total));
        return $list;
    }

    public static function listRecipients(array $data, int $total = 1): ListRecipientResponse
    {
        $list = new ListRecipientResponse();
        $list->setData($data);
        $list->setPaging(self::paging($total));
        return $list;
    }

    public static function listPayables(array $data, int $total = 1): ListPayablesResponse
    {
        $list = new ListPayablesResponse();
        $list->setData($data);
        $list->setPaging(self::paging($total));
        return $list;
    }

    public static function listChargeTransactions(array $data, int $total = 1): ListChargeTransactionsResponse
    {
        $list = new ListChargeTransactionsResponse();
        $list->setData($data);
        $list->setPaging(self::paging($total));
        return $list;
    }
}
