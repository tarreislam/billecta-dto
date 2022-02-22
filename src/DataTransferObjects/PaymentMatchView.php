<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class PaymentMatchView extends DataTransferObject
{
	/** Format: guid */
	public string $UnhandledPaymentPublicId;
	public ?string $ActionPublicId = null;

	/** Format: date-time */
	public ?string $PaymentDate = null;
}
