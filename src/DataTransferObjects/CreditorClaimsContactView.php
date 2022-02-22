<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CreditorClaimsContactView extends DataTransferObject
{
	public ?string $FirstName = null;
	public ?string $LastName = null;
	public ?string $Email = null;
	public ?string $Phone = null;
}
