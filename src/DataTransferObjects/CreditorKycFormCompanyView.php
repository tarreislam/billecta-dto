<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class CreditorKycFormCompanyView extends Data
{
	public function __construct(
		public ?string $Name = null,
		public ?string $OrgNo = null,
		public ?string $Address = null,
		public ?string $ZipCode = null,
		public ?string $City = null,
		public ?string $CountryName = null,
	) {
	}
}
