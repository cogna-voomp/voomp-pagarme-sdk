<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\CreatePlanItemRequest;
use PagarmeApiSDKLib\Models\CreatePlanRequest;
use PagarmeApiSDKLib\Models\CreatePricingSchemeRequest;

/**
 * Builder for model CreatePlanRequest
 *
 * @see CreatePlanRequest
 */
class CreatePlanRequestBuilder
{
    /**
     * @var CreatePlanRequest
     */
    private $instance;

    private function __construct(CreatePlanRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Plan Request Builder object.
     *
     * @param string $name
     * @param string $description
     * @param string $statementDescriptor
     * @param CreatePlanItemRequest[] $items
     * @param bool $shippable
     * @param string[] $paymentMethods
     * @param int[] $installments
     * @param string $currency
     * @param string $interval
     * @param int $intervalCount
     * @param int[] $billingDays
     * @param string $billingType
     * @param CreatePricingSchemeRequest $pricingScheme
     * @param array<string,string> $metadata
     */
    public static function init(
        string $name,
        string $description,
        string $statementDescriptor,
        array $items,
        bool $shippable,
        array $paymentMethods,
        array $installments,
        string $currency,
        string $interval,
        int $intervalCount,
        array $billingDays,
        string $billingType,
        CreatePricingSchemeRequest $pricingScheme,
        array $metadata
    ): self {
        return new self(new CreatePlanRequest(
            $name,
            $description,
            $statementDescriptor,
            $items,
            $shippable,
            $paymentMethods,
            $installments,
            $currency,
            $interval,
            $intervalCount,
            $billingDays,
            $billingType,
            $pricingScheme,
            $metadata
        ));
    }

    /**
     * Sets minimum price field.
     *
     * @param int|null $value
     */
    public function minimumPrice(?int $value): self
    {
        $this->instance->setMinimumPrice($value);
        return $this;
    }

    /**
     * Sets cycles field.
     *
     * @param int|null $value
     */
    public function cycles(?int $value): self
    {
        $this->instance->setCycles($value);
        return $this;
    }

    /**
     * Sets quantity field.
     *
     * @param int|null $value
     */
    public function quantity(?int $value): self
    {
        $this->instance->setQuantity($value);
        return $this;
    }

    /**
     * Sets trial period days field.
     *
     * @param int|null $value
     */
    public function trialPeriodDays(?int $value): self
    {
        $this->instance->setTrialPeriodDays($value);
        return $this;
    }

    /**
     * Initializes a new Create Plan Request object.
     */
    public function build(): CreatePlanRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
