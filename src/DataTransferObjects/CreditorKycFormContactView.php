<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class CreditorKycFormContactView extends Data
{
	public function __construct(
		public ?string $Name = null,
		public ?string $CitizenshipCountryName = null,
		public ?string $TaxCountryName = null,
		public ?string $Email = null,
		public ?string $Phone = null,
	) {
	}
}
