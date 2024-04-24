<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class AddMultipleDebtorsToCategoryRequestView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $CategoryPublicId,
		/** Format: guid */
		public string $CreditorPublicId,
		public ?array $DebtorPublicIds = null,
	) {
	}
}
