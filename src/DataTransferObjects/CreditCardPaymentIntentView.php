<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CreditCardPaymentIntentView extends DataTransferObject
{
	public ?string $ActionPublicId = null;
	public ?string $SuccessUrl = null;
	public ?string $FailureUrl = null;

	/**
	 * 0: SV
	 * 1: EN
	 * 2: FI
	 * @var string|int
	 */
	public $Language;
}
