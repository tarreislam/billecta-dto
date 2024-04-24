<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class CreditorKycFormBeneficialOwnerView extends Data
{
	public function __construct(
		public ?string $Name = null,
		public ?string $SSN = null,
		public ?string $Address = null,
		public ?string $CountryName = null,
	) {
	}
}
