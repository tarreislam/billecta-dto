<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class RegisterSelfInvoiceExternalPaymentView extends DataTransferObject
{
	public ?string $ActionPublicId = null;
	public ?AmountView $Amount = null;
	public ?string $Comment = null;

	/** Format: date-time */
	public string $Date;
	public ?string $PaymentMeanCode = null;
}
