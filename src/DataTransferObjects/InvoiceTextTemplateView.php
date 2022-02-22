<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class InvoiceTextTemplateView extends DataTransferObject
{
	/** Format: guid */
	public string $InvoiceTextTemplatePublicId;

	/** Format: guid */
	public string $CreditorPublicId;
	public ?string $Description = null;
}
