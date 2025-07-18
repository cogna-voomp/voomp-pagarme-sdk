<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models;

use PagarmeApiSDKLib\ApiHelper;
use stdClass;

/**
 * Request for creating a new increment
 */
class CreateIncrementRequest implements \JsonSerializable
{
    /**
     * @var float
     */
    private $value;

    /**
     * @var string
     */
    private $incrementType;

    /**
     * @var string
     */
    private $itemId;

    /**
     * @var int|null
     */
    private $cycles;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @param float $value
     * @param string $incrementType
     * @param string $itemId
     */
    public function __construct(float $value, string $incrementType, string $itemId)
    {
        $this->value = $value;
        $this->incrementType = $incrementType;
        $this->itemId = $itemId;
    }

    /**
     * Returns Value.
     * The increment value
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * Sets Value.
     * The increment value
     *
     * @required
     * @maps value
     */
    public function setValue(float $value): void
    {
        $this->value = $value;
    }

    /**
     * Returns Increment Type.
     * Increment type. Can be either flat or percentage.
     */
    public function getIncrementType(): string
    {
        return $this->incrementType;
    }

    /**
     * Sets Increment Type.
     * Increment type. Can be either flat or percentage.
     *
     * @required
     * @maps increment_type
     */
    public function setIncrementType(string $incrementType): void
    {
        $this->incrementType = $incrementType;
    }

    /**
     * Returns Item Id.
     * The item where the increment will be applied
     */
    public function getItemId(): string
    {
        return $this->itemId;
    }

    /**
     * Sets Item Id.
     * The item where the increment will be applied
     *
     * @required
     * @maps item_id
     */
    public function setItemId(string $itemId): void
    {
        $this->itemId = $itemId;
    }

    /**
     * Returns Cycles.
     * Number of cycles that the increment will be applied
     */
    public function getCycles(): ?int
    {
        return $this->cycles;
    }

    /**
     * Sets Cycles.
     * Number of cycles that the increment will be applied
     *
     * @maps cycles
     */
    public function setCycles(?int $cycles): void
    {
        $this->cycles = $cycles;
    }

    /**
     * Returns Description.
     * Description
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     * Description
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * Converts the CreateIncrementRequest object to a human-readable string representation.
     *
     * @return string The string representation of the CreateIncrementRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CreateIncrementRequest',
            [
                'value' => $this->value,
                'incrementType' => $this->incrementType,
                'itemId' => $this->itemId,
                'cycles' => $this->cycles,
                'description' => $this->description
            ]
        );
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['value']           = $this->value;
        $json['increment_type']  = $this->incrementType;
        $json['item_id']         = $this->itemId;
        if (isset($this->cycles)) {
            $json['cycles']      = $this->cycles;
        }
        if (isset($this->description)) {
            $json['description'] = $this->description;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
