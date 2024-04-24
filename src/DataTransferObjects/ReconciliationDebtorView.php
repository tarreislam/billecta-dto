<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ReconciliationDebtorView extends Data
{
	public function __construct(
		public ?string $DebtorNo = null,
		public ?string $OrgNo = null,
		public ?string $CountryCode = null,
		public ?string $Name = null,
		public ?string $Email = null,
		public ?string $Phone = null,
	) {
	}
}
