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

class GetUsageReportResponse implements \JsonSerializable
{
    /**
     * @var array
     */
    private $url = [];

    /**
     * @var array
     */
    private $usageReportUrl = [];

    /**
     * @var array
     */
    private $groupedReportUrl = [];

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
     * Returns Usage Report Url.
     */
    public function getUsageReportUrl(): ?string
    {
        if (count($this->usageReportUrl) == 0) {
            return null;
        }
        return $this->usageReportUrl['value'];
    }

    /**
     * Sets Usage Report Url.
     *
     * @maps usage_report_url
     */
    public function setUsageReportUrl(?string $usageReportUrl): void
    {
        $this->usageReportUrl['value'] = $usageReportUrl;
    }

    /**
     * Unsets Usage Report Url.
     */
    public function unsetUsageReportUrl(): void
    {
        $this->usageReportUrl = [];
    }

    /**
     * Returns Grouped Report Url.
     */
    public function getGroupedReportUrl(): ?string
    {
        if (count($this->groupedReportUrl) == 0) {
            return null;
        }
        return $this->groupedReportUrl['value'];
    }

    /**
     * Sets Grouped Report Url.
     *
     * @maps grouped_report_url
     */
    public function setGroupedReportUrl(?string $groupedReportUrl): void
    {
        $this->groupedReportUrl['value'] = $groupedReportUrl;
    }

    /**
     * Unsets Grouped Report Url.
     */
    public function unsetGroupedReportUrl(): void
    {
        $this->groupedReportUrl = [];
    }

    /**
     * Converts the GetUsageReportResponse object to a human-readable string representation.
     *
     * @return string The string representation of the GetUsageReportResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'GetUsageReportResponse',
            [
                'url' => $this->getUrl(),
                'usageReportUrl' => $this->getUsageReportUrl(),
                'groupedReportUrl' => $this->getGroupedReportUrl()
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
        if (!empty($this->url)) {
            $json['url']                = $this->url['value'];
        }
        if (!empty($this->usageReportUrl)) {
            $json['usage_report_url']   = $this->usageReportUrl['value'];
        }
        if (!empty($this->groupedReportUrl)) {
            $json['grouped_report_url'] = $this->groupedReportUrl['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
