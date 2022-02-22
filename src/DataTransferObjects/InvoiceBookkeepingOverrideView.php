<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class InvoiceBookkeepingOverrideView extends DataTransferObject
{
	public ?string $DebitAccount = null;
}
