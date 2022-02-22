<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class InvoiceActionRotRutProcessedView extends DataTransferObject
{
	public ?string $ActionPublicId = null;

	/** Format: date-time */
	public string $Processed;
	public ?string $ProcessedBy = null;
}
