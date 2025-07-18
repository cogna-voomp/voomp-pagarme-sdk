<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\GetManagingPartnerResponse;
use PagarmeApiSDKLib\Models\GetPhoneNumberResponse;
use PagarmeApiSDKLib\Models\GetRegisterInformationAddressResponse;
use PagarmeApiSDKLib\Models\GetRegisterInformationResponse;

/**
 * Builder for model GetRegisterInformationResponse
 *
 * @see GetRegisterInformationResponse
 */
class GetRegisterInformationResponseBuilder
{
    /**
     * @var GetRegisterInformationResponse
     */
    private $instance;

    private function __construct(GetRegisterInformationResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Get Register Information Response Builder object.
     */
    public static function init(): self
    {
        return new self(new GetRegisterInformationResponse());
    }

    /**
     * Sets email field.
     *
     * @param string|null $value
     */
    public function email(?string $value): self
    {
        $this->instance->setEmail($value);
        return $this;
    }

    /**
     * Unsets email field.
     */
    public function unsetEmail(): self
    {
        $this->instance->unsetEmail();
        return $this;
    }

    /**
     * Sets document field.
     *
     * @param string|null $value
     */
    public function document(?string $value): self
    {
        $this->instance->setDocument($value);
        return $this;
    }

    /**
     * Unsets document field.
     */
    public function unsetDocument(): self
    {
        $this->instance->unsetDocument();
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
     * Sets site url field.
     *
     * @param string|null $value
     */
    public function siteUrl(?string $value): self
    {
        $this->instance->setSiteUrl($value);
        return $this;
    }

    /**
     * Unsets site url field.
     */
    public function unsetSiteUrl(): self
    {
        $this->instance->unsetSiteUrl();
        return $this;
    }

    /**
     * Sets phone numbers field.
     *
     * @param GetPhoneNumberResponse[]|null $value
     */
    public function phoneNumbers(?array $value): self
    {
        $this->instance->setPhoneNumbers($value);
        return $this;
    }

    /**
     * Unsets phone numbers field.
     */
    public function unsetPhoneNumbers(): self
    {
        $this->instance->unsetPhoneNumbers();
        return $this;
    }

    /**
     * Sets name field.
     *
     * @param string|null $value
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Unsets name field.
     */
    public function unsetName(): self
    {
        $this->instance->unsetName();
        return $this;
    }

    /**
     * Sets mother name field.
     *
     * @param string|null $value
     */
    public function motherName(?string $value): self
    {
        $this->instance->setMotherName($value);
        return $this;
    }

    /**
     * Unsets mother name field.
     */
    public function unsetMotherName(): self
    {
        $this->instance->unsetMotherName();
        return $this;
    }

    /**
     * Sets birthdate field.
     *
     * @param string|null $value
     */
    public function birthdate(?string $value): self
    {
        $this->instance->setBirthdate($value);
        return $this;
    }

    /**
     * Unsets birthdate field.
     */
    public function unsetBirthdate(): self
    {
        $this->instance->unsetBirthdate();
        return $this;
    }

    /**
     * Sets monthly income field.
     *
     * @param string|null $value
     */
    public function monthlyIncome(?string $value): self
    {
        $this->instance->setMonthlyIncome($value);
        return $this;
    }

    /**
     * Unsets monthly income field.
     */
    public function unsetMonthlyIncome(): self
    {
        $this->instance->unsetMonthlyIncome();
        return $this;
    }

    /**
     * Sets professional occupation field.
     *
     * @param string|null $value
     */
    public function professionalOccupation(?string $value): self
    {
        $this->instance->setProfessionalOccupation($value);
        return $this;
    }

    /**
     * Unsets professional occupation field.
     */
    public function unsetProfessionalOccupation(): self
    {
        $this->instance->unsetProfessionalOccupation();
        return $this;
    }

    /**
     * Sets address field.
     *
     * @param GetRegisterInformationAddressResponse|null $value
     */
    public function address(?GetRegisterInformationAddressResponse $value): self
    {
        $this->instance->setAddress($value);
        return $this;
    }

    /**
     * Unsets address field.
     */
    public function unsetAddress(): self
    {
        $this->instance->unsetAddress();
        return $this;
    }

    /**
     * Sets company name field.
     *
     * @param string|null $value
     */
    public function companyName(?string $value): self
    {
        $this->instance->setCompanyName($value);
        return $this;
    }

    /**
     * Unsets company name field.
     */
    public function unsetCompanyName(): self
    {
        $this->instance->unsetCompanyName();
        return $this;
    }

    /**
     * Sets trading name field.
     *
     * @param string|null $value
     */
    public function tradingName(?string $value): self
    {
        $this->instance->setTradingName($value);
        return $this;
    }

    /**
     * Unsets trading name field.
     */
    public function unsetTradingName(): self
    {
        $this->instance->unsetTradingName();
        return $this;
    }

    /**
     * Sets annual revenue field.
     *
     * @param string|null $value
     */
    public function annualRevenue(?string $value): self
    {
        $this->instance->setAnnualRevenue($value);
        return $this;
    }

    /**
     * Unsets annual revenue field.
     */
    public function unsetAnnualRevenue(): self
    {
        $this->instance->unsetAnnualRevenue();
        return $this;
    }

    /**
     * Sets corporation type field.
     *
     * @param string|null $value
     */
    public function corporationType(?string $value): self
    {
        $this->instance->setCorporationType($value);
        return $this;
    }

    /**
     * Unsets corporation type field.
     */
    public function unsetCorporationType(): self
    {
        $this->instance->unsetCorporationType();
        return $this;
    }

    /**
     * Sets founding date field.
     *
     * @param string|null $value
     */
    public function foundingDate(?string $value): self
    {
        $this->instance->setFoundingDate($value);
        return $this;
    }

    /**
     * Unsets founding date field.
     */
    public function unsetFoundingDate(): self
    {
        $this->instance->unsetFoundingDate();
        return $this;
    }

    /**
     * Sets cnae field.
     *
     * @param string|null $value
     */
    public function cnae(?string $value): self
    {
        $this->instance->setCnae($value);
        return $this;
    }

    /**
     * Unsets cnae field.
     */
    public function unsetCnae(): self
    {
        $this->instance->unsetCnae();
        return $this;
    }

    /**
     * Sets main address field.
     *
     * @param GetRegisterInformationAddressResponse|null $value
     */
    public function mainAddress(?GetRegisterInformationAddressResponse $value): self
    {
        $this->instance->setMainAddress($value);
        return $this;
    }

    /**
     * Unsets main address field.
     */
    public function unsetMainAddress(): self
    {
        $this->instance->unsetMainAddress();
        return $this;
    }

    /**
     * Sets managing partners field.
     *
     * @param GetManagingPartnerResponse[]|null $value
     */
    public function managingPartners(?array $value): self
    {
        $this->instance->setManagingPartners($value);
        return $this;
    }

    /**
     * Unsets managing partners field.
     */
    public function unsetManagingPartners(): self
    {
        $this->instance->unsetManagingPartners();
        return $this;
    }

    /**
     * Initializes a new Get Register Information Response object.
     */
    public function build(): GetRegisterInformationResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
