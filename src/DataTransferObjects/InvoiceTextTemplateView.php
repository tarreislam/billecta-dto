<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class InvoiceTextTemplateView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $InvoiceTextTemplatePublicId,
		/** Format: guid */
		public string $CreditorPublicId,
		public ?string $Description = null,
	) {
	}
}
