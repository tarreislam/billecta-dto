<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CostCenterView extends DataTransferObject
{
	/** Format: guid */
	public string $CreditorPublicId;
	public ?string $Code = null;
	public ?string $Description = null;
	public ?string $Comments = null;
	public bool $Active;
}
