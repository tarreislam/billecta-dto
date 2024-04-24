<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class CreditorForeignAccountView extends Data
{
	public function __construct(
		public ?string $CurrencyCode = null,
		public ?string $BankName = null,
		public ?string $Iban = null,
		public ?string $Bic = null,
	) {
	}
}
