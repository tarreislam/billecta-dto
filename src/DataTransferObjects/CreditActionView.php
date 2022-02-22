<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CreditActionView extends DataTransferObject
{
	public ?string $ActionPublicId = null;
	public ?AmountView $Value = null;
	public bool $InvoiceInterest;
	public ?string $Comment = null;
	public bool $IsPaymentCreditation;
	public ?string $PaymentMeanCode = null;

	/** Format: date-time */
	public ?string $PaymentDate = null;
}
