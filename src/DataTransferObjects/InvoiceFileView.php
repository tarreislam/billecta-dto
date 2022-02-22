<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class InvoiceFileView extends DataTransferObject
{
	public ?string $OCR = null;

	/** Format: byte */
	public ?string $Stream = null;
	public ?string $Url = null;
}
