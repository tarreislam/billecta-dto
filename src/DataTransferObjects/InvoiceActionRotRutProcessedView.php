<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class InvoiceActionRotRutProcessedView extends Data
{
	public function __construct(
		/** Format: date-time */
		public string $Processed,
		public ?string $ActionPublicId = null,
		public ?string $ProcessedBy = null,
	) {
	}
}
