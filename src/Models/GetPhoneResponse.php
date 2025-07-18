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

class GetPhoneResponse implements \JsonSerializable
{
    /**
     * @var array
     */
    private $countryCode = [];

    /**
     * @var array
     */
    private $number = [];

    /**
     * @var array
     */
    private $areaCode = [];

    /**
     * Returns Country Code.
     */
    public function getCountryCode(): ?string
    {
        if (count($this->countryCode) == 0) {
            return null;
        }
        return $this->countryCode['value'];
    }

    /**
     * Sets Country Code.
     *
     * @maps country_code
     */
    public function setCountryCode(?string $countryCode): void
    {
        $this->countryCode['value'] = $countryCode;
    }

    /**
     * Unsets Country Code.
     */
    public function unsetCountryCode(): void
    {
        $this->countryCode = [];
    }

    /**
     * Returns Number.
     */
    public function getNumber(): ?string
    {
        if (count($this->number) == 0) {
            return null;
        }
        return $this->number['value'];
    }

    /**
     * Sets Number.
     *
     * @maps number
     */
    public function setNumber(?string $number): void
    {
        $this->number['value'] = $number;
    }

    /**
     * Unsets Number.
     */
    public function unsetNumber(): void
    {
        $this->number = [];
    }

    /**
     * Returns Area Code.
     */
    public function getAreaCode(): ?string
    {
        if (count($this->areaCode) == 0) {
            return null;
        }
        return $this->areaCode['value'];
    }

    /**
     * Sets Area Code.
     *
     * @maps area_code
     */
    public function setAreaCode(?string $areaCode): void
    {
        $this->areaCode['value'] = $areaCode;
    }

    /**
     * Unsets Area Code.
     */
    public function unsetAreaCode(): void
    {
        $this->areaCode = [];
    }

    /**
     * Converts the GetPhoneResponse object to a human-readable string representation.
     *
     * @return string The string representation of the GetPhoneResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'GetPhoneResponse',
            [
                'countryCode' => $this->getCountryCode(),
                'number' => $this->getNumber(),
                'areaCode' => $this->getAreaCode()
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
        if (!empty($this->countryCode)) {
            $json['country_code'] = $this->countryCode['value'];
        }
        if (!empty($this->number)) {
            $json['number']       = $this->number['value'];
        }
        if (!empty($this->areaCode)) {
            $json['area_code']    = $this->areaCode['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
