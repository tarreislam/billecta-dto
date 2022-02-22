<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CreditorTokenView extends DataTransferObject
{
	/** Format: guid */
	public string $Token;
	public ?string $PortalURL = null;
}
