<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\CreateCheckoutBoletoPaymentRequest;

/**
 * Builder for model CreateCheckoutBoletoPaymentRequest
 *
 * @see CreateCheckoutBoletoPaymentRequest
 */
class CreateCheckoutBoletoPaymentRequestBuilder
{
    /**
     * @var CreateCheckoutBoletoPaymentRequest
     */
    private $instance;

    private function __construct(CreateCheckoutBoletoPaymentRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Checkout Boleto Payment Request Builder object.
     *
     * @param string $bank
     * @param string $instructions
     * @param \DateTime $dueAt
     */
    public static function init(string $bank, string $instructions, \DateTime $dueAt): self
    {
        return new self(new CreateCheckoutBoletoPaymentRequest($bank, $instructions, $dueAt));
    }

    /**
     * Initializes a new Create Checkout Boleto Payment Request object.
     */
    public function build(): CreateCheckoutBoletoPaymentRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
