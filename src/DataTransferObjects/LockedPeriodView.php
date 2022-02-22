<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class LockedPeriodView extends DataTransferObject
{
	/** Format: guid */
	public string $CreditorPublicId;

	/** Format: date-time */
	public string $To;
}
