<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CreditorKycFormContactView extends DataTransferObject
{
	public ?string $Name = null;
	public ?string $CitizenshipCountryName = null;
	public ?string $TaxCountryName = null;
	public ?string $Email = null;
	public ?string $Phone = null;
}
