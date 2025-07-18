<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\GetRegisterInformationAddressResponse;

/**
 * Builder for model GetRegisterInformationAddressResponse
 *
 * @see GetRegisterInformationAddressResponse
 */
class GetRegisterInformationAddressResponseBuilder
{
    /**
     * @var GetRegisterInformationAddressResponse
     */
    private $instance;

    private function __construct(GetRegisterInformationAddressResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Get Register Information Address Response Builder object.
     */
    public static function init(): self
    {
        return new self(new GetRegisterInformationAddressResponse());
    }

    /**
     * Sets street field.
     *
     * @param string|null $value
     */
    public function street(?string $value): self
    {
        $this->instance->setStreet($value);
        return $this;
    }

    /**
     * Unsets street field.
     */
    public function unsetStreet(): self
    {
        $this->instance->unsetStreet();
        return $this;
    }

    /**
     * Sets complementary field.
     *
     * @param string|null $value
     */
    public function complementary(?string $value): self
    {
        $this->instance->setComplementary($value);
        return $this;
    }

    /**
     * Unsets complementary field.
     */
    public function unsetComplementary(): self
    {
        $this->instance->unsetComplementary();
        return $this;
    }

    /**
     * Sets street number field.
     *
     * @param string|null $value
     */
    public function streetNumber(?string $value): self
    {
        $this->instance->setStreetNumber($value);
        return $this;
    }

    /**
     * Unsets street number field.
     */
    public function unsetStreetNumber(): self
    {
        $this->instance->unsetStreetNumber();
        return $this;
    }

    /**
     * Sets neighborhood field.
     *
     * @param string|null $value
     */
    public function neighborhood(?string $value): self
    {
        $this->instance->setNeighborhood($value);
        return $this;
    }

    /**
     * Unsets neighborhood field.
     */
    public function unsetNeighborhood(): self
    {
        $this->instance->unsetNeighborhood();
        return $this;
    }

    /**
     * Sets city field.
     *
     * @param string|null $value
     */
    public function city(?string $value): self
    {
        $this->instance->setCity($value);
        return $this;
    }

    /**
     * Unsets city field.
     */
    public function unsetCity(): self
    {
        $this->instance->unsetCity();
        return $this;
    }

    /**
     * Sets state field.
     *
     * @param string|null $value
     */
    public function state(?string $value): self
    {
        $this->instance->setState($value);
        return $this;
    }

    /**
     * Unsets state field.
     */
    public function unsetState(): self
    {
        $this->instance->unsetState();
        return $this;
    }

    /**
     * Sets zip code field.
     *
     * @param string|null $value
     */
    public function zipCode(?string $value): self
    {
        $this->instance->setZipCode($value);
        return $this;
    }

    /**
     * Unsets zip code field.
     */
    public function unsetZipCode(): self
    {
        $this->instance->unsetZipCode();
        return $this;
    }

    /**
     * Sets reference point field.
     *
     * @param string|null $value
     */
    public function referencePoint(?string $value): self
    {
        $this->instance->setReferencePoint($value);
        return $this;
    }

    /**
     * Unsets reference point field.
     */
    public function unsetReferencePoint(): self
    {
        $this->instance->unsetReferencePoint();
        return $this;
    }

    /**
     * Initializes a new Get Register Information Address Response object.
     */
    public function build(): GetRegisterInformationAddressResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
