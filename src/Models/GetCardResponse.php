<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models;

use PagarmeApiSDKLib\ApiHelper;
use PagarmeApiSDKLib\Utils\DateTimeHelper;
use stdClass;

/**
 * Response object for getting a credit card
 */
class GetCardResponse implements \JsonSerializable
{
    /**
     * @var array
     */
    private $id = [];

    /**
     * @var array
     */
    private $lastFourDigits = [];

    /**
     * @var array
     */
    private $brand = [];

    /**
     * @var array
     */
    private $holderName = [];

    /**
     * @var array
     */
    private $expMonth = [];

    /**
     * @var array
     */
    private $expYear = [];

    /**
     * @var array
     */
    private $status = [];

    /**
     * @var array
     */
    private $createdAt = [];

    /**
     * @var array
     */
    private $updatedAt = [];

    /**
     * @var array
     */
    private $billingAddress = [];

    /**
     * @var array
     */
    private $customer = [];

    /**
     * @var array
     */
    private $metadata = [];

    /**
     * @var array
     */
    private $type = [];

    /**
     * @var array
     */
    private $holderDocument = [];

    /**
     * @var array
     */
    private $deletedAt = [];

    /**
     * @var array
     */
    private $firstSixDigits = [];

    /**
     * @var array
     */
    private $label = [];

    /**
     * Returns Id.
     */
    public function getId(): ?string
    {
        if (count($this->id) == 0) {
            return null;
        }
        return $this->id['value'];
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id['value'] = $id;
    }

    /**
     * Unsets Id.
     */
    public function unsetId(): void
    {
        $this->id = [];
    }

    /**
     * Returns Last Four Digits.
     */
    public function getLastFourDigits(): ?string
    {
        if (count($this->lastFourDigits) == 0) {
            return null;
        }
        return $this->lastFourDigits['value'];
    }

    /**
     * Sets Last Four Digits.
     *
     * @maps last_four_digits
     */
    public function setLastFourDigits(?string $lastFourDigits): void
    {
        $this->lastFourDigits['value'] = $lastFourDigits;
    }

    /**
     * Unsets Last Four Digits.
     */
    public function unsetLastFourDigits(): void
    {
        $this->lastFourDigits = [];
    }

    /**
     * Returns Brand.
     */
    public function getBrand(): ?string
    {
        if (count($this->brand) == 0) {
            return null;
        }
        return $this->brand['value'];
    }

    /**
     * Sets Brand.
     *
     * @maps brand
     */
    public function setBrand(?string $brand): void
    {
        $this->brand['value'] = $brand;
    }

    /**
     * Unsets Brand.
     */
    public function unsetBrand(): void
    {
        $this->brand = [];
    }

    /**
     * Returns Holder Name.
     */
    public function getHolderName(): ?string
    {
        if (count($this->holderName) == 0) {
            return null;
        }
        return $this->holderName['value'];
    }

    /**
     * Sets Holder Name.
     *
     * @maps holder_name
     */
    public function setHolderName(?string $holderName): void
    {
        $this->holderName['value'] = $holderName;
    }

    /**
     * Unsets Holder Name.
     */
    public function unsetHolderName(): void
    {
        $this->holderName = [];
    }

    /**
     * Returns Exp Month.
     */
    public function getExpMonth(): ?int
    {
        if (count($this->expMonth) == 0) {
            return null;
        }
        return $this->expMonth['value'];
    }

    /**
     * Sets Exp Month.
     *
     * @maps exp_month
     */
    public function setExpMonth(?int $expMonth): void
    {
        $this->expMonth['value'] = $expMonth;
    }

    /**
     * Unsets Exp Month.
     */
    public function unsetExpMonth(): void
    {
        $this->expMonth = [];
    }

    /**
     * Returns Exp Year.
     */
    public function getExpYear(): ?int
    {
        if (count($this->expYear) == 0) {
            return null;
        }
        return $this->expYear['value'];
    }

    /**
     * Sets Exp Year.
     *
     * @maps exp_year
     */
    public function setExpYear(?int $expYear): void
    {
        $this->expYear['value'] = $expYear;
    }

    /**
     * Unsets Exp Year.
     */
    public function unsetExpYear(): void
    {
        $this->expYear = [];
    }

    /**
     * Returns Status.
     */
    public function getStatus(): ?string
    {
        if (count($this->status) == 0) {
            return null;
        }
        return $this->status['value'];
    }

    /**
     * Sets Status.
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status['value'] = $status;
    }

    /**
     * Unsets Status.
     */
    public function unsetStatus(): void
    {
        $this->status = [];
    }

    /**
     * Returns Created At.
     */
    public function getCreatedAt(): ?\DateTime
    {
        if (count($this->createdAt) == 0) {
            return null;
        }
        return $this->createdAt['value'];
    }

    /**
     * Sets Created At.
     *
     * @maps created_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedAt(?\DateTime $createdAt): void
    {
        $this->createdAt['value'] = $createdAt;
    }

    /**
     * Unsets Created At.
     */
    public function unsetCreatedAt(): void
    {
        $this->createdAt = [];
    }

    /**
     * Returns Updated At.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        if (count($this->updatedAt) == 0) {
            return null;
        }
        return $this->updatedAt['value'];
    }

    /**
     * Sets Updated At.
     *
     * @maps updated_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setUpdatedAt(?\DateTime $updatedAt): void
    {
        $this->updatedAt['value'] = $updatedAt;
    }

    /**
     * Unsets Updated At.
     */
    public function unsetUpdatedAt(): void
    {
        $this->updatedAt = [];
    }

    /**
     * Returns Billing Address.
     */
    public function getBillingAddress(): ?GetBillingAddressResponse
    {
        if (count($this->billingAddress) == 0) {
            return null;
        }
        return $this->billingAddress['value'];
    }

    /**
     * Sets Billing Address.
     *
     * @maps billing_address
     */
    public function setBillingAddress(?GetBillingAddressResponse $billingAddress): void
    {
        $this->billingAddress['value'] = $billingAddress;
    }

    /**
     * Unsets Billing Address.
     */
    public function unsetBillingAddress(): void
    {
        $this->billingAddress = [];
    }

    /**
     * Returns Customer.
     */
    public function getCustomer(): ?GetCustomerResponse
    {
        if (count($this->customer) == 0) {
            return null;
        }
        return $this->customer['value'];
    }

    /**
     * Sets Customer.
     *
     * @maps customer
     */
    public function setCustomer(?GetCustomerResponse $customer): void
    {
        $this->customer['value'] = $customer;
    }

    /**
     * Unsets Customer.
     */
    public function unsetCustomer(): void
    {
        $this->customer = [];
    }

    /**
     * Returns Metadata.
     *
     * @return array<string,string>|null
     */
    public function getMetadata(): ?array
    {
        if (count($this->metadata) == 0) {
            return null;
        }
        return $this->metadata['value'];
    }

    /**
     * Sets Metadata.
     *
     * @maps metadata
     *
     * @param array<string,string>|null $metadata
     */
    public function setMetadata(?array $metadata): void
    {
        $this->metadata['value'] = $metadata;
    }

    /**
     * Unsets Metadata.
     */
    public function unsetMetadata(): void
    {
        $this->metadata = [];
    }

    /**
     * Returns Type.
     * Card type
     */
    public function getType(): ?string
    {
        if (count($this->type) == 0) {
            return null;
        }
        return $this->type['value'];
    }

    /**
     * Sets Type.
     * Card type
     *
     * @maps type
     */
    public function setType(?string $type): void
    {
        $this->type['value'] = $type;
    }

    /**
     * Unsets Type.
     * Card type
     */
    public function unsetType(): void
    {
        $this->type = [];
    }

    /**
     * Returns Holder Document.
     * Document number for the card's holder
     */
    public function getHolderDocument(): ?string
    {
        if (count($this->holderDocument) == 0) {
            return null;
        }
        return $this->holderDocument['value'];
    }

    /**
     * Sets Holder Document.
     * Document number for the card's holder
     *
     * @maps holder_document
     */
    public function setHolderDocument(?string $holderDocument): void
    {
        $this->holderDocument['value'] = $holderDocument;
    }

    /**
     * Unsets Holder Document.
     * Document number for the card's holder
     */
    public function unsetHolderDocument(): void
    {
        $this->holderDocument = [];
    }

    /**
     * Returns Deleted At.
     */
    public function getDeletedAt(): ?\DateTime
    {
        if (count($this->deletedAt) == 0) {
            return null;
        }
        return $this->deletedAt['value'];
    }

    /**
     * Sets Deleted At.
     *
     * @maps deleted_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setDeletedAt(?\DateTime $deletedAt): void
    {
        $this->deletedAt['value'] = $deletedAt;
    }

    /**
     * Unsets Deleted At.
     */
    public function unsetDeletedAt(): void
    {
        $this->deletedAt = [];
    }

    /**
     * Returns First Six Digits.
     * First six digits
     */
    public function getFirstSixDigits(): ?string
    {
        if (count($this->firstSixDigits) == 0) {
            return null;
        }
        return $this->firstSixDigits['value'];
    }

    /**
     * Sets First Six Digits.
     * First six digits
     *
     * @maps first_six_digits
     */
    public function setFirstSixDigits(?string $firstSixDigits): void
    {
        $this->firstSixDigits['value'] = $firstSixDigits;
    }

    /**
     * Unsets First Six Digits.
     * First six digits
     */
    public function unsetFirstSixDigits(): void
    {
        $this->firstSixDigits = [];
    }

    /**
     * Returns Label.
     */
    public function getLabel(): ?string
    {
        if (count($this->label) == 0) {
            return null;
        }
        return $this->label['value'];
    }

    /**
     * Sets Label.
     *
     * @maps label
     */
    public function setLabel(?string $label): void
    {
        $this->label['value'] = $label;
    }

    /**
     * Unsets Label.
     */
    public function unsetLabel(): void
    {
        $this->label = [];
    }

    /**
     * Converts the GetCardResponse object to a human-readable string representation.
     *
     * @return string The string representation of the GetCardResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'GetCardResponse',
            [
                'id' => $this->getId(),
                'lastFourDigits' => $this->getLastFourDigits(),
                'brand' => $this->getBrand(),
                'holderName' => $this->getHolderName(),
                'expMonth' => $this->getExpMonth(),
                'expYear' => $this->getExpYear(),
                'status' => $this->getStatus(),
                'createdAt' => $this->getCreatedAt(),
                'updatedAt' => $this->getUpdatedAt(),
                'billingAddress' => $this->getBillingAddress(),
                'customer' => $this->getCustomer(),
                'metadata' => $this->getMetadata(),
                'type' => $this->getType(),
                'holderDocument' => $this->getHolderDocument(),
                'deletedAt' => $this->getDeletedAt(),
                'firstSixDigits' => $this->getFirstSixDigits(),
                'label' => $this->getLabel()
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
        if (!empty($this->id)) {
            $json['id']               = $this->id['value'];
        }
        if (!empty($this->lastFourDigits)) {
            $json['last_four_digits'] = $this->lastFourDigits['value'];
        }
        if (!empty($this->brand)) {
            $json['brand']            = $this->brand['value'];
        }
        if (!empty($this->holderName)) {
            $json['holder_name']      = $this->holderName['value'];
        }
        if (!empty($this->expMonth)) {
            $json['exp_month']        = $this->expMonth['value'];
        }
        if (!empty($this->expYear)) {
            $json['exp_year']         = $this->expYear['value'];
        }
        if (!empty($this->status)) {
            $json['status']           = $this->status['value'];
        }
        if (!empty($this->createdAt)) {
            $json['created_at']       = DateTimeHelper::toRfc3339DateTime($this->createdAt['value']);
        }
        if (!empty($this->updatedAt)) {
            $json['updated_at']       = DateTimeHelper::toRfc3339DateTime($this->updatedAt['value']);
        }
        if (!empty($this->billingAddress)) {
            $json['billing_address']  = $this->billingAddress['value'];
        }
        if (!empty($this->customer)) {
            $json['customer']         = $this->customer['value'];
        }
        if (!empty($this->metadata)) {
            $json['metadata']         = $this->metadata['value'];
        }
        if (!empty($this->type)) {
            $json['type']             = $this->type['value'];
        }
        if (!empty($this->holderDocument)) {
            $json['holder_document']  = $this->holderDocument['value'];
        }
        if (!empty($this->deletedAt)) {
            $json['deleted_at']       = DateTimeHelper::toRfc3339DateTime($this->deletedAt['value']);
        }
        if (!empty($this->firstSixDigits)) {
            $json['first_six_digits'] = $this->firstSixDigits['value'];
        }
        if (!empty($this->label)) {
            $json['label']            = $this->label['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
