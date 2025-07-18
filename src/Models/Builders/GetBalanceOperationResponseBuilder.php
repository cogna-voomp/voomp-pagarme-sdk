<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\GetBalanceOperationResponse;
use PagarmeApiSDKLib\Models\GetMovementObjectBaseResponse;

/**
 * Builder for model GetBalanceOperationResponse
 *
 * @see GetBalanceOperationResponse
 */
class GetBalanceOperationResponseBuilder
{
    /**
     * @var GetBalanceOperationResponse
     */
    private $instance;

    private function __construct(GetBalanceOperationResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Get Balance Operation Response Builder object.
     */
    public static function init(): self
    {
        return new self(new GetBalanceOperationResponse());
    }

    /**
     * Sets id field.
     *
     * @param string|null $value
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Unsets id field.
     */
    public function unsetId(): self
    {
        $this->instance->unsetId();
        return $this;
    }

    /**
     * Sets status field.
     *
     * @param string|null $value
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Unsets status field.
     */
    public function unsetStatus(): self
    {
        $this->instance->unsetStatus();
        return $this;
    }

    /**
     * Sets balance amount field.
     *
     * @param string|null $value
     */
    public function balanceAmount(?string $value): self
    {
        $this->instance->setBalanceAmount($value);
        return $this;
    }

    /**
     * Unsets balance amount field.
     */
    public function unsetBalanceAmount(): self
    {
        $this->instance->unsetBalanceAmount();
        return $this;
    }

    /**
     * Sets balance old amount field.
     *
     * @param string|null $value
     */
    public function balanceOldAmount(?string $value): self
    {
        $this->instance->setBalanceOldAmount($value);
        return $this;
    }

    /**
     * Unsets balance old amount field.
     */
    public function unsetBalanceOldAmount(): self
    {
        $this->instance->unsetBalanceOldAmount();
        return $this;
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
     * Sets amount field.
     *
     * @param int|null $value
     */
    public function amount(?int $value): self
    {
        $this->instance->setAmount($value);
        return $this;
    }

    /**
     * Unsets amount field.
     */
    public function unsetAmount(): self
    {
        $this->instance->unsetAmount();
        return $this;
    }

    /**
     * Sets fee field.
     *
     * @param string|null $value
     */
    public function fee(?string $value): self
    {
        $this->instance->setFee($value);
        return $this;
    }

    /**
     * Unsets fee field.
     */
    public function unsetFee(): self
    {
        $this->instance->unsetFee();
        return $this;
    }

    /**
     * Sets created at field.
     *
     * @param string|null $value
     */
    public function createdAt(?string $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Unsets created at field.
     */
    public function unsetCreatedAt(): self
    {
        $this->instance->unsetCreatedAt();
        return $this;
    }

    /**
     * Sets movement object field.
     *
     * @param GetMovementObjectBaseResponse|null $value
     */
    public function movementObject(?GetMovementObjectBaseResponse $value): self
    {
        $this->instance->setMovementObject($value);
        return $this;
    }

    /**
     * Initializes a new Get Balance Operation Response object.
     */
    public function build(): GetBalanceOperationResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
