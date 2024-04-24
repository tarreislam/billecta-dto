<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class IncomingPaymentRequestView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $CreditorPublicId,
		/** Format: date-time */
		public string $From,
		/** Format: date-time */
		public string $To,
		public ?array $PaymentMeanCodeFilter = null,
		public ?array $ProjectNumberFilter = null,
		public ?array $ActionPublicIdFilter = null,
	) {
	}
}
