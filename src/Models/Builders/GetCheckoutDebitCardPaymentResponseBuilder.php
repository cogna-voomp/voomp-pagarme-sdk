<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\GetCheckoutDebitCardPaymentResponse;
use PagarmeApiSDKLib\Models\GetPaymentAuthenticationResponse;

/**
 * Builder for model GetCheckoutDebitCardPaymentResponse
 *
 * @see GetCheckoutDebitCardPaymentResponse
 */
class GetCheckoutDebitCardPaymentResponseBuilder
{
    /**
     * @var GetCheckoutDebitCardPaymentResponse
     */
    private $instance;

    private function __construct(GetCheckoutDebitCardPaymentResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Get Checkout Debit Card Payment Response Builder object.
     */
    public static function init(): self
    {
        return new self(new GetCheckoutDebitCardPaymentResponse());
    }

    /**
     * Sets statement descriptor field.
     *
     * @param string|null $value
     */
    public function statementDescriptor(?string $value): self
    {
        $this->instance->setStatementDescriptor($value);
        return $this;
    }

    /**
     * Unsets statement descriptor field.
     */
    public function unsetStatementDescriptor(): self
    {
        $this->instance->unsetStatementDescriptor();
        return $this;
    }

    /**
     * Sets authentication field.
     *
     * @param GetPaymentAuthenticationResponse|null $value
     */
    public function authentication(?GetPaymentAuthenticationResponse $value): self
    {
        $this->instance->setAuthentication($value);
        return $this;
    }

    /**
     * Unsets authentication field.
     */
    public function unsetAuthentication(): self
    {
        $this->instance->unsetAuthentication();
        return $this;
    }

    /**
     * Initializes a new Get Checkout Debit Card Payment Response object.
     */
    public function build(): GetCheckoutDebitCardPaymentResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
