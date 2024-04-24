<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class CreditCardPaymentIntentView extends Data
{
	public function __construct(
		/**
		 * 0: SV
		 * 1: EN
		 * 2: FI
		 * @var string|int
		 */
		public string|int $Language,
		public ?string $ActionPublicId = null,
		public ?string $SuccessUrl = null,
		public ?string $FailureUrl = null,
	) {
	}
}
