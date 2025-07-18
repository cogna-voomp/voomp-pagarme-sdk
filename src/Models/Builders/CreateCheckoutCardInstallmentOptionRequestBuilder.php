<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\CreateCheckoutCardInstallmentOptionRequest;

/**
 * Builder for model CreateCheckoutCardInstallmentOptionRequest
 *
 * @see CreateCheckoutCardInstallmentOptionRequest
 */
class CreateCheckoutCardInstallmentOptionRequestBuilder
{
    /**
     * @var CreateCheckoutCardInstallmentOptionRequest
     */
    private $instance;

    private function __construct(CreateCheckoutCardInstallmentOptionRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Checkout Card Installment Option Request Builder object.
     *
     * @param int $number
     * @param int $total
     */
    public static function init(int $number, int $total): self
    {
        return new self(new CreateCheckoutCardInstallmentOptionRequest($number, $total));
    }

    /**
     * Initializes a new Create Checkout Card Installment Option Request object.
     */
    public function build(): CreateCheckoutCardInstallmentOptionRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
