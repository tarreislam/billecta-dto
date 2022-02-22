<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CreditorSubView extends DataTransferObject
{
	/** Format: guid */
	public string $CreditorPublicId;
	public ?string $Name = null;
	public bool $IsEnabled;
	public ?string $OrgNo = null;
	public ?string $LogoURL = null;
}
