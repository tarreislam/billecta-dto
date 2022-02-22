<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class DebtCollectionMessageView extends DataTransferObject
{
	/** Format: guid */
	public string $PublicId;
	public ?string $Message = null;
	public bool $IsActive;
}
