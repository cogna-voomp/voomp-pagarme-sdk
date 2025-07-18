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
 * Response object for listing transactions
 */
class ListTransactionsResponse implements \JsonSerializable
{
    /**
     * @var array
     */
    private $data = [];

    /**
     * @var array
     */
    private $paging = [];

    /**
     * Returns Data.
     * The transaction objects
     *
     * @return GetTransactionResponse[]|null
     */
    public function getData(): ?array
    {
        if (count($this->data) == 0) {
            return null;
        }
        return $this->data['value'];
    }

    /**
     * Sets Data.
     * The transaction objects
     *
     * @maps data
     *
     * @param GetTransactionResponse[]|null $data
     */
    public function setData(?array $data): void
    {
        $this->data['value'] = $data;
    }

    /**
     * Unsets Data.
     * The transaction objects
     */
    public function unsetData(): void
    {
        $this->data = [];
    }

    /**
     * Returns Paging.
     * Paging object
     */
    public function getPaging(): ?PagingResponse
    {
        if (count($this->paging) == 0) {
            return null;
        }
        return $this->paging['value'];
    }

    /**
     * Sets Paging.
     * Paging object
     *
     * @maps paging
     */
    public function setPaging(?PagingResponse $paging): void
    {
        $this->paging['value'] = $paging;
    }

    /**
     * Unsets Paging.
     * Paging object
     */
    public function unsetPaging(): void
    {
        $this->paging = [];
    }

    /**
     * Converts the ListTransactionsResponse object to a human-readable string representation.
     *
     * @return string The string representation of the ListTransactionsResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ListTransactionsResponse',
            ['data' => $this->getData(), 'paging' => $this->getPaging()]
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
        if (!empty($this->data)) {
            $json['data']   = $this->data['value'];
        }
        if (!empty($this->paging)) {
            $json['paging'] = $this->paging['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
