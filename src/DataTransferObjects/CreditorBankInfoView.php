<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CreditorBankInfoView extends DataTransferObject
{
	public bool $UsesClientFund;
	public CreditorPaymentMethodTypeView $PaymentMethod;
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
