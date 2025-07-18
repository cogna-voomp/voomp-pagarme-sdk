<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\CreateCardPayloadRequest;
use PagarmeApiSDKLib\Models\CreateGooglePayRequest;

/**
 * Builder for model CreateCardPayloadRequest
 *
 * @see CreateCardPayloadRequest
 */
class CreateCardPayloadRequestBuilder
{
    /**
     * @var CreateCardPayloadRequest
     */
    private $instance;

    private function __construct(CreateCardPayloadRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Card Payload Request Builder object.
     */
    public static function init(): self
    {
        return new self(new CreateCardPayloadRequest());
    }

    /**
     * Sets type field.
     *
     * @param string|null $value
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Unsets type field.
     */
    public function unsetType(): self
    {
        $this->instance->unsetType();
        return $this;
    }

    /**
     * Sets google pay field.
     *
     * @param CreateGooglePayRequest|null $value
     */
    public function googlePay(?CreateGooglePayRequest $value): self
    {
        $this->instance->setGooglePay($value);
        return $this;
    }

    /**
     * Unsets google pay field.
     */
    public function unsetGooglePay(): self
    {
        $this->instance->unsetGooglePay();
        return $this;
    }

    /**
     * Initializes a new Create Card Payload Request object.
     */
    public function build(): CreateCardPayloadRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
