<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\GetCheckoutPixPaymentResponse;
use PagarmeApiSDKLib\Models\PixAdditionalInformation;

/**
 * Builder for model GetCheckoutPixPaymentResponse
 *
 * @see GetCheckoutPixPaymentResponse
 */
class GetCheckoutPixPaymentResponseBuilder
{
    /**
     * @var GetCheckoutPixPaymentResponse
     */
    private $instance;

    private function __construct(GetCheckoutPixPaymentResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Get Checkout Pix Payment Response Builder object.
     */
    public static function init(): self
    {
        return new self(new GetCheckoutPixPaymentResponse());
    }

    /**
     * Sets expires at field.
     *
     * @param \DateTime|null $value
     */
    public function expiresAt(?\DateTime $value): self
    {
        $this->instance->setExpiresAt($value);
        return $this;
    }

    /**
     * Unsets expires at field.
     */
    public function unsetExpiresAt(): self
    {
        $this->instance->unsetExpiresAt();
        return $this;
    }

    /**
     * Sets additional information field.
     *
     * @param PixAdditionalInformation[]|null $value
     */
    public function additionalInformation(?array $value): self
    {
        $this->instance->setAdditionalInformation($value);
        return $this;
    }

    /**
     * Unsets additional information field.
     */
    public function unsetAdditionalInformation(): self
    {
        $this->instance->unsetAdditionalInformation();
        return $this;
    }

    /**
     * Initializes a new Get Checkout Pix Payment Response object.
     */
    public function build(): GetCheckoutPixPaymentResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
