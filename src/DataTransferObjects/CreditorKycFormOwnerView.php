<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CreditorKycFormOwnerView extends DataTransferObject
{
	public ?string $Name = null;
	public ?string $SSN = null;
	public float $HoldingSharesInPercent;
	public float $HoldingVotesInPercent;
	public ?string $Address = null;
	public ?string $CountryName = null;
	public bool $IsNonLegalEntity;
	public bool $HasUsCitizenship;
	public bool $NonLegalEntityIsDirectOWner;
}
