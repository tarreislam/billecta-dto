<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CreditorPaymentMethodView extends DataTransferObject
{
	public CreditorPaymentMethodPriorityTypeView $Priority;
	public CreditorPaymentMethodTypeView $PaymentMethod;
	public ?string $BankgiroNo = null;
	public ?string $PlusgiroNo = null;
	public ?string $ClearingNo = null;
	public ?string $AccountNo = null;
	public ?string $IBAN = null;
	public ?string $BIC = null;
	public bool $Verified;
}
