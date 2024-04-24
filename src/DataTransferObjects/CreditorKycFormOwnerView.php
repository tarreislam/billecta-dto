<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class CreditorKycFormOwnerView extends Data
{
	public function __construct(
		public float $HoldingSharesInPercent,
		public float $HoldingVotesInPercent,
		public bool $IsNonLegalEntity,
		public bool $HasUsCitizenship,
		public bool $NonLegalEntityIsDirectOWner,
		public ?string $Name = null,
		public ?string $SSN = null,
		public ?string $Address = null,
		public ?string $CountryName = null,
	) {
	}
}
