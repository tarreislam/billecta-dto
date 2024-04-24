<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class DebtorAutogiroApprovalView extends Data
{
	public function __construct(
		/** Format: date-time */
		public string $Created,
		public bool $Active,
		public ?string $AutoGiroApprovalXML = null,
	) {
	}
}
