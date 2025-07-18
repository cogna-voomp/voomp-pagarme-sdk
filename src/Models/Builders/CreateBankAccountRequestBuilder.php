<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\CreateBankAccountRequest;

/**
 * Builder for model CreateBankAccountRequest
 *
 * @see CreateBankAccountRequest
 */
class CreateBankAccountRequestBuilder
{
    /**
     * @var CreateBankAccountRequest
     */
    private $instance;

    private function __construct(CreateBankAccountRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Bank Account Request Builder object.
     *
     * @param string $holderName
     * @param string $holderType
     * @param string $holderDocument
     * @param string $bank
     * @param string $branchNumber
     * @param string $accountNumber
     * @param string $accountCheckDigit
     * @param string $type
     * @param array<string,string> $metadata
     */
    public static function init(
        string $holderName,
        string $holderType,
        string $holderDocument,
        string $bank,
        string $branchNumber,
        string $accountNumber,
        string $accountCheckDigit,
        string $type,
        array $metadata
    ): self {
        return new self(new CreateBankAccountRequest(
            $holderName,
            $holderType,
            $holderDocument,
            $bank,
            $branchNumber,
            $accountNumber,
            $accountCheckDigit,
            $type,
            $metadata
        ));
    }

    /**
     * Sets branch check digit field.
     *
     * @param string|null $value
     */
    public function branchCheckDigit(?string $value): self
    {
        $this->instance->setBranchCheckDigit($value);
        return $this;
    }

    /**
     * Unsets branch check digit field.
     */
    public function unsetBranchCheckDigit(): self
    {
        $this->instance->unsetBranchCheckDigit();
        return $this;
    }

    /**
     * Sets pix key field.
     *
     * @param string|null $value
     */
    public function pixKey(?string $value): self
    {
        $this->instance->setPixKey($value);
        return $this;
    }

    /**
     * Unsets pix key field.
     */
    public function unsetPixKey(): self
    {
        $this->instance->unsetPixKey();
        return $this;
    }

    /**
     * Initializes a new Create Bank Account Request object.
     */
    public function build(): CreateBankAccountRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
