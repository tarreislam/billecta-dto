<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class SelfInvoicePaymentView extends DataTransferObject
{
	public ?string $ActionPublicId = null;

	/** Format: date-time */
	public ?string $PaymentDate = null;
	public ?AmountView $Amount = null;
}
