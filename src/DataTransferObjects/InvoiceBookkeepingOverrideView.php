<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class InvoiceBookkeepingOverrideView extends Data
{
	public function __construct(
		public ?string $DebitAccount = null,
	) {
	}
}
