<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CreditorKycFormCompanyView extends DataTransferObject
{
	public ?string $Name = null;
	public ?string $OrgNo = null;
	public ?string $Address = null;
	public ?string $ZipCode = null;
	public ?string $City = null;
	public ?string $CountryName = null;
}
