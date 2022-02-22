<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class PaymentOverrideView extends DataTransferObject
{
	public ?string $BankGiro = null;
	public ?string $PlusGiro = null;
	public ?string $ClearingNo = null;
	public ?string $AccountNo = null;
	public ?string $Iban = null;
	public ?string $Bic = null;
	public ?string $BankName = null;
	public ?string $PaymentReceiver = null;
	public ?string $Reference = null;
	public ReferenceTypeView $ReferenceType;
	public ReceivingAccountTypeView $ReceivingAccountType;
}
