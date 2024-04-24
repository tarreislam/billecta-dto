<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class CreditCardAddIntentView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $DebtorPublicId,
		/**
		 * 0: SV
		 * 1: EN
		 * 2: FI
		 * @var string|int
		 */
		public string|int $Language,
		public ?string $SuccessUrl = null,
		public ?string $FailureUrl = null,
	) {
	}
}
