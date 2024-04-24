<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class DebtorCreditCardView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $CreditCardPublicId,
		/** Format: date-time */
		public string $Created,
		/** Format: date-time */
		public string $Expires,
		public ?string $MaskedCardNumber = null,
		public ?string $Brand = null,
	) {
	}
}
