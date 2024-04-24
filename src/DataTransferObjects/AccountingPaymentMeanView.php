<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class AccountingPaymentMeanView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $CreditorPublicId,
		public ?string $PaymentCode = null,
		public ?string $Description = null,
		public ?string $BookkeepingAccount = null,
	) {
	}
}
