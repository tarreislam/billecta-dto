<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class InvoiceFileView extends Data
{
	public function __construct(
		public ?string $OCR = null,
		/** Format: byte */
		public ?string $Stream = null,
		public ?string $Url = null,
	) {
	}
}
