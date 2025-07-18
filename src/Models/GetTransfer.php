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

class GetTransfer implements \JsonSerializable
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $gatewayId;

    /**
     * @var int
     */
    private $amount;

    /**
     * @var string
     */
    private $status;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var array<string,string>|null
     */
    private $metadata;

    /**
     * @var int|null
     */
    private $fee;

    /**
     * @var \DateTime|null
     */
    private $fundingDate;

    /**
     * @var \DateTime|null
     */
    private $fundingEstimatedDate;

    /**
     * @var string
     */
    private $type;

    /**
     * @var GetTransferSourceResponse
     */
    private $source;

    /**
     * @var GetTransferTargetResponse
     */
    private $target;

    /**
     * @param string $id
     * @param string $gatewayId
     * @param int $amount
     * @param string $status
     * @param \DateTime $createdAt
     * @param \DateTime $updatedAt
     * @param string $type
     * @param GetTransferSourceResponse $source
     * @param GetTransferTargetResponse $target
     */
    public function __construct(
        string $id,
        string $gatewayId,
        int $amount,
        string $status,
        \DateTime $createdAt,
        \DateTime $updatedAt,
        string $type,
        GetTransferSourceResponse $source,
        GetTransferTargetResponse $target
    ) {
        $this->id = $id;
        $this->gatewayId = $gatewayId;
        $this->amount = $amount;
        $this->status = $status;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->type = $type;
        $this->source = $source;
        $this->target = $target;
    }

    /**
     * Returns Id.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @required
     * @maps id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Gateway Id.
     */
    public function getGatewayId(): string
    {
        return $this->gatewayId;
    }

    /**
     * Sets Gateway Id.
     *
     * @required
     * @maps gateway_id
     */
    public function setGatewayId(string $gatewayId): void
    {
        $this->gatewayId = $gatewayId;
    }

    /**
     * Returns Amount.
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     *
     * @required
     * @maps amount
     */
    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Status.
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     *
     * @required
     * @maps status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Created At.
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     *
     * @required
     * @maps created_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedAt(\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Updated At.
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Sets Updated At.
     *
     * @required
     * @maps updated_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setUpdatedAt(\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Returns Metadata.
     *
     * @return array<string,string>|null
     */
    public function getMetadata(): ?array
    {
        return $this->metadata;
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
        $this->metadata = $metadata;
    }

    /**
     * Returns Fee.
     */
    public function getFee(): ?int
    {
        return $this->fee;
    }

    /**
     * Sets Fee.
     *
     * @maps fee
     */
    public function setFee(?int $fee): void
    {
        $this->fee = $fee;
    }

    /**
     * Returns Funding Date.
     */
    public function getFundingDate(): ?\DateTime
    {
        return $this->fundingDate;
    }

    /**
     * Sets Funding Date.
     *
     * @maps funding_date
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setFundingDate(?\DateTime $fundingDate): void
    {
        $this->fundingDate = $fundingDate;
    }

    /**
     * Returns Funding Estimated Date.
     */
    public function getFundingEstimatedDate(): ?\DateTime
    {
        return $this->fundingEstimatedDate;
    }

    /**
     * Sets Funding Estimated Date.
     *
     * @maps funding_estimated_date
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setFundingEstimatedDate(?\DateTime $fundingEstimatedDate): void
    {
        $this->fundingEstimatedDate = $fundingEstimatedDate;
    }

    /**
     * Returns Type.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     *
     * @required
     * @maps type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Source.
     */
    public function getSource(): GetTransferSourceResponse
    {
        return $this->source;
    }

    /**
     * Sets Source.
     *
     * @required
     * @maps source
     */
    public function setSource(GetTransferSourceResponse $source): void
    {
        $this->source = $source;
    }

    /**
     * Returns Target.
     */
    public function getTarget(): GetTransferTargetResponse
    {
        return $this->target;
    }

    /**
     * Sets Target.
     *
     * @required
     * @maps target
     */
    public function setTarget(GetTransferTargetResponse $target): void
    {
        $this->target = $target;
    }

    /**
     * Converts the GetTransfer object to a human-readable string representation.
     *
     * @return string The string representation of the GetTransfer object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'GetTransfer',
            [
                'id' => $this->id,
                'gatewayId' => $this->gatewayId,
                'amount' => $this->amount,
                'status' => $this->status,
                'createdAt' => $this->createdAt,
                'updatedAt' => $this->updatedAt,
                'metadata' => $this->metadata,
                'fee' => $this->fee,
                'fundingDate' => $this->fundingDate,
                'fundingEstimatedDate' => $this->fundingEstimatedDate,
                'type' => $this->type,
                'source' => $this->source,
                'target' => $this->target
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
        $json['id']                         = $this->id;
        $json['gateway_id']                 = $this->gatewayId;
        $json['amount']                     = $this->amount;
        $json['status']                     = $this->status;
        $json['created_at']                 = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        $json['updated_at']                 = DateTimeHelper::toRfc3339DateTime($this->updatedAt);
        if (isset($this->metadata)) {
            $json['metadata']               = $this->metadata;
        }
        if (isset($this->fee)) {
            $json['fee']                    = $this->fee;
        }
        if (isset($this->fundingDate)) {
            $json['funding_date']           = DateTimeHelper::toRfc3339DateTime($this->fundingDate);
        }
        if (isset($this->fundingEstimatedDate)) {
            $json['funding_estimated_date'] = DateTimeHelper::toRfc3339DateTime($this->fundingEstimatedDate);
        }
        $json['type']                       = $this->type;
        $json['source']                     = $this->source;
        $json['target']                     = $this->target;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
