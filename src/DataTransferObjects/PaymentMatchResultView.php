<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class PaymentMatchResultView extends DataTransferObject
{
	/** Format: guid */
	public string $UnhandledPaymentPublicId;
	public bool $Successfull;
	public ?string $ResponseMessage = null;
}
