<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class RegisterReconciliationPaymentView extends DataTransferObject
{
	public ?string $ActionPublicId = null;
	public ?AmountView $Amount = null;
	public ?AmountView $WriteOff = null;
	public ?string $Comment = null;

	/** Format: date-time */
	public string $Date;
	public float $WriteOffVat;
	public ?string $PaymentMeanCode = null;
	public bool $AmountIsCredit;
}
