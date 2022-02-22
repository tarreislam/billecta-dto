<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class RegisterPaymentView extends DataTransferObject
{
	public ?string $ActionPublicId = null;
	public ?AmountView $Amount = null;
	public ?AmountView $WriteOff = null;
	public ?string $Comment = null;

	/** Format: date-time */
	public string $Date;
	public float $WriteOffVat;
	public ?string $OverrideWriteOffAccount = null;
	public ?string $PaymentMeanCode = null;
	public RegisterPaymentOverShootingAmountHandlingTypeView $OvershootingAmountHandling;
	public ?string $PaymentReferenceText = null;
}
