<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class PaymentMatchView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $UnhandledPaymentPublicId,
		public ?string $ActionPublicId = null,
		/** Format: date-time */
		public ?string $PaymentDate = null,
	) {
	}
}
