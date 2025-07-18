<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\UpdateOrderItemRequest;

/**
 * Builder for model UpdateOrderItemRequest
 *
 * @see UpdateOrderItemRequest
 */
class UpdateOrderItemRequestBuilder
{
    /**
     * @var UpdateOrderItemRequest
     */
    private $instance;

    private function __construct(UpdateOrderItemRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Update Order Item Request Builder object.
     *
     * @param int $amount
     * @param string $description
     * @param int $quantity
     * @param string $category
     */
    public static function init(int $amount, string $description, int $quantity, string $category): self
    {
        return new self(new UpdateOrderItemRequest($amount, $description, $quantity, $category));
    }

    /**
     * Initializes a new Update Order Item Request object.
     */
    public function build(): UpdateOrderItemRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
