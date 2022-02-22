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

	/**
	 * 0: None
	 * 1: AsCurrencyDifference
	 * 2: AsOverPayments
	 * -1: Unknown
	 * @var string|int
	 */
	public $OvershootingAmountHandling;
	public ?string $PaymentReferenceText = null;
}
