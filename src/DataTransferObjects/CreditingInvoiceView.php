<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class CreditingInvoiceView extends Data
{
	public function __construct(
		public ?string $SourcePublicId = null,
		public ?string $SourceInvoiceId = null,
	) {
	}
}
