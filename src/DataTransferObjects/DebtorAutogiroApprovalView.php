<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class DebtorAutogiroApprovalView extends DataTransferObject
{
	/** Format: date-time */
	public string $Created;
	public bool $Active;
	public ?string $AutoGiroApprovalXML = null;
}
