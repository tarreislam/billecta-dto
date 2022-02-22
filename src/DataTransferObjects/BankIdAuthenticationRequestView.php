<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class BankIdAuthenticationRequestView extends DataTransferObject
{
	/** Format: guid */
	public string $CreditorPublicId;
	public ?string $SSN = null;
	public bool $TokenStartRequired;
}
