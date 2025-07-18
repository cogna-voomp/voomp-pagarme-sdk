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
 * Response object for getting an invoice
 */
class GetInvoiceResponse implements \JsonSerializable
{
    /**
     * @var array
     */
    private $id = [];

    /**
     * @var array
     */
    private $code = [];

    /**
     * @var array
     */
    private $url = [];

    /**
     * @var array
     */
    private $amount = [];

    /**
     * @var array
     */
    private $status = [];

    /**
     * @var array
     */
    private $paymentMethod = [];

    /**
     * @var array
     */
    private $createdAt = [];

    /**
     * @var array
     */
    private $items = [];

    /**
     * @var array
     */
    private $customer = [];

    /**
     * @var array
     */
    private $charge = [];

    /**
     * @var array
     */
    private $installments = [];

    /**
     * @var array
     */
    private $billingAddress = [];

    /**
     * @var array
     */
    private $subscription = [];

    /**
     * @var array
     */
    private $cycle = [];

    /**
     * @var array
     */
    private $shipping = [];

    /**
     * @var array
     */
    private $metadata = [];

    /**
     * @var array
     */
    private $dueAt = [];

    /**
     * @var array
     */
    private $canceledAt = [];

    /**
     * @var array
     */
    private $billingAt = [];

    /**
     * @var array
     */
    private $seenAt = [];

    /**
     * @var array
     */
    private $totalDiscount = [];

    /**
     * @var array
     */
    private $totalIncrement = [];

    /**
     * @var array
     */
    private $subscriptionId = [];

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
     * Returns Code.
     */
    public function getCode(): ?string
    {
        if (count($this->code) == 0) {
            return null;
        }
        return $this->code['value'];
    }

    /**
     * Sets Code.
     *
     * @maps code
     */
    public function setCode(?string $code): void
    {
        $this->code['value'] = $code;
    }

    /**
     * Unsets Code.
     */
    public function unsetCode(): void
    {
        $this->code = [];
    }

    /**
     * Returns Url.
     */
    public function getUrl(): ?string
    {
        if (count($this->url) == 0) {
            return null;
        }
        return $this->url['value'];
    }

    /**
     * Sets Url.
     *
     * @maps url
     */
    public function setUrl(?string $url): void
    {
        $this->url['value'] = $url;
    }

    /**
     * Unsets Url.
     */
    public function unsetUrl(): void
    {
        $this->url = [];
    }

    /**
     * Returns Amount.
     */
    public function getAmount(): ?int
    {
        if (count($this->amount) == 0) {
            return null;
        }
        return $this->amount['value'];
    }

    /**
     * Sets Amount.
     *
     * @maps amount
     */
    public function setAmount(?int $amount): void
    {
        $this->amount['value'] = $amount;
    }

    /**
     * Unsets Amount.
     */
    public function unsetAmount(): void
    {
        $this->amount = [];
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
     * Returns Payment Method.
     */
    public function getPaymentMethod(): ?string
    {
        if (count($this->paymentMethod) == 0) {
            return null;
        }
        return $this->paymentMethod['value'];
    }

    /**
     * Sets Payment Method.
     *
     * @maps payment_method
     */
    public function setPaymentMethod(?string $paymentMethod): void
    {
        $this->paymentMethod['value'] = $paymentMethod;
    }

    /**
     * Unsets Payment Method.
     */
    public function unsetPaymentMethod(): void
    {
        $this->paymentMethod = [];
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
     * Returns Items.
     *
     * @return GetInvoiceItemResponse[]|null
     */
    public function getItems(): ?array
    {
        if (count($this->items) == 0) {
            return null;
        }
        return $this->items['value'];
    }

    /**
     * Sets Items.
     *
     * @maps items
     *
     * @param GetInvoiceItemResponse[]|null $items
     */
    public function setItems(?array $items): void
    {
        $this->items['value'] = $items;
    }

    /**
     * Unsets Items.
     */
    public function unsetItems(): void
    {
        $this->items = [];
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
     * Returns Charge.
     */
    public function getCharge(): ?GetChargeResponse
    {
        if (count($this->charge) == 0) {
            return null;
        }
        return $this->charge['value'];
    }

    /**
     * Sets Charge.
     *
     * @maps charge
     */
    public function setCharge(?GetChargeResponse $charge): void
    {
        $this->charge['value'] = $charge;
    }

    /**
     * Unsets Charge.
     */
    public function unsetCharge(): void
    {
        $this->charge = [];
    }

    /**
     * Returns Installments.
     */
    public function getInstallments(): ?int
    {
        if (count($this->installments) == 0) {
            return null;
        }
        return $this->installments['value'];
    }

    /**
     * Sets Installments.
     *
     * @maps installments
     */
    public function setInstallments(?int $installments): void
    {
        $this->installments['value'] = $installments;
    }

    /**
     * Unsets Installments.
     */
    public function unsetInstallments(): void
    {
        $this->installments = [];
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
     * Returns Subscription.
     */
    public function getSubscription(): ?GetSubscriptionResponse
    {
        if (count($this->subscription) == 0) {
            return null;
        }
        return $this->subscription['value'];
    }

    /**
     * Sets Subscription.
     *
     * @maps subscription
     */
    public function setSubscription(?GetSubscriptionResponse $subscription): void
    {
        $this->subscription['value'] = $subscription;
    }

    /**
     * Unsets Subscription.
     */
    public function unsetSubscription(): void
    {
        $this->subscription = [];
    }

    /**
     * Returns Cycle.
     */
    public function getCycle(): ?GetPeriodResponse
    {
        if (count($this->cycle) == 0) {
            return null;
        }
        return $this->cycle['value'];
    }

    /**
     * Sets Cycle.
     *
     * @maps cycle
     */
    public function setCycle(?GetPeriodResponse $cycle): void
    {
        $this->cycle['value'] = $cycle;
    }

    /**
     * Unsets Cycle.
     */
    public function unsetCycle(): void
    {
        $this->cycle = [];
    }

    /**
     * Returns Shipping.
     */
    public function getShipping(): ?GetShippingResponse
    {
        if (count($this->shipping) == 0) {
            return null;
        }
        return $this->shipping['value'];
    }

    /**
     * Sets Shipping.
     *
     * @maps shipping
     */
    public function setShipping(?GetShippingResponse $shipping): void
    {
        $this->shipping['value'] = $shipping;
    }

    /**
     * Unsets Shipping.
     */
    public function unsetShipping(): void
    {
        $this->shipping = [];
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
     * Returns Due At.
     */
    public function getDueAt(): ?\DateTime
    {
        if (count($this->dueAt) == 0) {
            return null;
        }
        return $this->dueAt['value'];
    }

    /**
     * Sets Due At.
     *
     * @maps due_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setDueAt(?\DateTime $dueAt): void
    {
        $this->dueAt['value'] = $dueAt;
    }

    /**
     * Unsets Due At.
     */
    public function unsetDueAt(): void
    {
        $this->dueAt = [];
    }

    /**
     * Returns Canceled At.
     */
    public function getCanceledAt(): ?\DateTime
    {
        if (count($this->canceledAt) == 0) {
            return null;
        }
        return $this->canceledAt['value'];
    }

    /**
     * Sets Canceled At.
     *
     * @maps canceled_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCanceledAt(?\DateTime $canceledAt): void
    {
        $this->canceledAt['value'] = $canceledAt;
    }

    /**
     * Unsets Canceled At.
     */
    public function unsetCanceledAt(): void
    {
        $this->canceledAt = [];
    }

    /**
     * Returns Billing At.
     */
    public function getBillingAt(): ?\DateTime
    {
        if (count($this->billingAt) == 0) {
            return null;
        }
        return $this->billingAt['value'];
    }

    /**
     * Sets Billing At.
     *
     * @maps billing_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setBillingAt(?\DateTime $billingAt): void
    {
        $this->billingAt['value'] = $billingAt;
    }

    /**
     * Unsets Billing At.
     */
    public function unsetBillingAt(): void
    {
        $this->billingAt = [];
    }

    /**
     * Returns Seen At.
     */
    public function getSeenAt(): ?\DateTime
    {
        if (count($this->seenAt) == 0) {
            return null;
        }
        return $this->seenAt['value'];
    }

    /**
     * Sets Seen At.
     *
     * @maps seen_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setSeenAt(?\DateTime $seenAt): void
    {
        $this->seenAt['value'] = $seenAt;
    }

    /**
     * Unsets Seen At.
     */
    public function unsetSeenAt(): void
    {
        $this->seenAt = [];
    }

    /**
     * Returns Total Discount.
     * Total discounted value
     */
    public function getTotalDiscount(): ?int
    {
        if (count($this->totalDiscount) == 0) {
            return null;
        }
        return $this->totalDiscount['value'];
    }

    /**
     * Sets Total Discount.
     * Total discounted value
     *
     * @maps total_discount
     */
    public function setTotalDiscount(?int $totalDiscount): void
    {
        $this->totalDiscount['value'] = $totalDiscount;
    }

    /**
     * Unsets Total Discount.
     * Total discounted value
     */
    public function unsetTotalDiscount(): void
    {
        $this->totalDiscount = [];
    }

    /**
     * Returns Total Increment.
     * Total discounted value
     */
    public function getTotalIncrement(): ?int
    {
        if (count($this->totalIncrement) == 0) {
            return null;
        }
        return $this->totalIncrement['value'];
    }

    /**
     * Sets Total Increment.
     * Total discounted value
     *
     * @maps total_increment
     */
    public function setTotalIncrement(?int $totalIncrement): void
    {
        $this->totalIncrement['value'] = $totalIncrement;
    }

    /**
     * Unsets Total Increment.
     * Total discounted value
     */
    public function unsetTotalIncrement(): void
    {
        $this->totalIncrement = [];
    }

    /**
     * Returns Subscription Id.
     * Subscription Id
     */
    public function getSubscriptionId(): ?string
    {
        if (count($this->subscriptionId) == 0) {
            return null;
        }
        return $this->subscriptionId['value'];
    }

    /**
     * Sets Subscription Id.
     * Subscription Id
     *
     * @maps subscription_id
     */
    public function setSubscriptionId(?string $subscriptionId): void
    {
        $this->subscriptionId['value'] = $subscriptionId;
    }

    /**
     * Unsets Subscription Id.
     * Subscription Id
     */
    public function unsetSubscriptionId(): void
    {
        $this->subscriptionId = [];
    }

    /**
     * Converts the GetInvoiceResponse object to a human-readable string representation.
     *
     * @return string The string representation of the GetInvoiceResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'GetInvoiceResponse',
            [
                'id' => $this->getId(),
                'code' => $this->getCode(),
                'url' => $this->getUrl(),
                'amount' => $this->getAmount(),
                'status' => $this->getStatus(),
                'paymentMethod' => $this->getPaymentMethod(),
                'createdAt' => $this->getCreatedAt(),
                'items' => $this->getItems(),
                'customer' => $this->getCustomer(),
                'charge' => $this->getCharge(),
                'installments' => $this->getInstallments(),
                'billingAddress' => $this->getBillingAddress(),
                'subscription' => $this->getSubscription(),
                'cycle' => $this->getCycle(),
                'shipping' => $this->getShipping(),
                'metadata' => $this->getMetadata(),
                'dueAt' => $this->getDueAt(),
                'canceledAt' => $this->getCanceledAt(),
                'billingAt' => $this->getBillingAt(),
                'seenAt' => $this->getSeenAt(),
                'totalDiscount' => $this->getTotalDiscount(),
                'totalIncrement' => $this->getTotalIncrement(),
                'subscriptionId' => $this->getSubscriptionId()
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
            $json['id']              = $this->id['value'];
        }
        if (!empty($this->code)) {
            $json['code']            = $this->code['value'];
        }
        if (!empty($this->url)) {
            $json['url']             = $this->url['value'];
        }
        if (!empty($this->amount)) {
            $json['amount']          = $this->amount['value'];
        }
        if (!empty($this->status)) {
            $json['status']          = $this->status['value'];
        }
        if (!empty($this->paymentMethod)) {
            $json['payment_method']  = $this->paymentMethod['value'];
        }
        if (!empty($this->createdAt)) {
            $json['created_at']      = DateTimeHelper::toRfc3339DateTime($this->createdAt['value']);
        }
        if (!empty($this->items)) {
            $json['items']           = $this->items['value'];
        }
        if (!empty($this->customer)) {
            $json['customer']        = $this->customer['value'];
        }
        if (!empty($this->charge)) {
            $json['charge']          = $this->charge['value'];
        }
        if (!empty($this->installments)) {
            $json['installments']    = $this->installments['value'];
        }
        if (!empty($this->billingAddress)) {
            $json['billing_address'] = $this->billingAddress['value'];
        }
        if (!empty($this->subscription)) {
            $json['subscription']    = $this->subscription['value'];
        }
        if (!empty($this->cycle)) {
            $json['cycle']           = $this->cycle['value'];
        }
        if (!empty($this->shipping)) {
            $json['shipping']        = $this->shipping['value'];
        }
        if (!empty($this->metadata)) {
            $json['metadata']        = $this->metadata['value'];
        }
        if (!empty($this->dueAt)) {
            $json['due_at']          = DateTimeHelper::toRfc3339DateTime($this->dueAt['value']);
        }
        if (!empty($this->canceledAt)) {
            $json['canceled_at']     = DateTimeHelper::toRfc3339DateTime($this->canceledAt['value']);
        }
        if (!empty($this->billingAt)) {
            $json['billing_at']      = DateTimeHelper::toRfc3339DateTime($this->billingAt['value']);
        }
        if (!empty($this->seenAt)) {
            $json['seen_at']         = DateTimeHelper::toRfc3339DateTime($this->seenAt['value']);
        }
        if (!empty($this->totalDiscount)) {
            $json['total_discount']  = $this->totalDiscount['value'];
        }
        if (!empty($this->totalIncrement)) {
            $json['total_increment'] = $this->totalIncrement['value'];
        }
        if (!empty($this->subscriptionId)) {
            $json['subscription_id'] = $this->subscriptionId['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
