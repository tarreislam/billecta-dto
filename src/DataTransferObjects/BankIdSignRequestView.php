<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class BankIdSignRequestView extends DataTransferObject
{
	/** Format: guid */
	public string $CreditorPublicId;
	public ?string $SSN = null;
	public ?string $UserMessage = null;
	public ?string $UserNonVisibleData = null;
	public bool $TokenStartRequired;
}
