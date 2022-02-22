<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CreditorBankInfoView extends DataTransferObject
{
	public bool $UsesClientFund;

	/**
	 * 0: BankGiro
	 * 1: PlusGiro
	 * 2: BankAccount
	 * 3: IBAN
	 * -1: Unknown
	 * @var string|int
	 */
	public $PaymentMethod;
	public ?string $BankgiroNo = null;
	public bool $BankgiroNoVerified;
	public ?string $PlusgiroNo = null;
	public ?string $AccountNo = null;
	public ?string $ClearingNo = null;
	public bool $SwishPaymentEnabled;
	public ?string $SwishNumber = null;
	public bool $AutogiroEnabled;
	public ?string $AutogiroCustomerNumber = null;
	public ?string $EInvoiceFUI = null;
	public ?string $EInvoiceCUI = null;
	public ?array $ForeignAccounts = null;
	public ?array $CreditorOutgoingBankgiroes = null;
	public ?array $PaymentMethods = null;
}
