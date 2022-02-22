<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CreditorKycFormUsPersonView extends DataTransferObject
{
	public ?string $Name = null;
	public ?string $Address = null;
	public ?string $TIN = null;
}
