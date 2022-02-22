<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CreditorKycFormBeneficialOwnerView extends DataTransferObject
{
	public ?string $Name = null;
	public ?string $SSN = null;
	public ?string $Address = null;
	public ?string $CountryName = null;
}
