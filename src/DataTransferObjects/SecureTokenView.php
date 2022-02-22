<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class SecureTokenView extends DataTransferObject
{
	public ?string $Value = null;

	/** Format: date-time */
	public string $Expires;
}
