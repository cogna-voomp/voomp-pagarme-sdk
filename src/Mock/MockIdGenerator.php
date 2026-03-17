<?php

declare(strict_types=1);

namespace PagarmeApiSDKLib\Mock;

class MockIdGenerator
{
    private static $counters = [];

    public static function generate(string $prefix): string
    {
        if (!isset(self::$counters[$prefix])) {
            self::$counters[$prefix] = 0;
        }
        self::$counters[$prefix]++;
        $rand = bin2hex(random_bytes(6));
        return $prefix . '_mock_' . self::$counters[$prefix] . '_' . $rand;
    }

    public static function reset(): void
    {
        self::$counters = [];
    }

    public static function planId(): string
    {
        return self::generate('plan');
    }

    public static function subscriptionId(): string
    {
        return self::generate('sub');
    }

    public static function chargeId(): string
    {
        return self::generate('ch');
    }

    public static function orderId(): string
    {
        return self::generate('or');
    }

    public static function customerId(): string
    {
        return self::generate('cus');
    }

    public static function cardId(): string
    {
        return self::generate('card');
    }

    public static function invoiceId(): string
    {
        return self::generate('in');
    }

    public static function cycleId(): string
    {
        return self::generate('cycle');
    }

    public static function transactionId(): string
    {
        return self::generate('tran');
    }

    public static function recipientId(): string
    {
        return self::generate('rp');
    }

    public static function addressId(): string
    {
        return self::generate('addr');
    }

    public static function subscriptionItemId(): string
    {
        return self::generate('si');
    }

    public static function planItemId(): string
    {
        return self::generate('pi');
    }

    public static function orderItemId(): string
    {
        return self::generate('oi');
    }

    public static function payableId(): string
    {
        return self::generate('payable');
    }

    public static function gatewayId(): string
    {
        return (string) random_int(1000000000, 9999999999);
    }

    public static function invoiceCode(): string
    {
        return strtoupper(bin2hex(random_bytes(5)));
    }

    public static function authCode(): string
    {
        return (string) random_int(100000, 999999);
    }
}
