<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class BankIdAuthenticationRequestView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $CreditorPublicId,
		public bool $TokenStartRequired,
		public ?string $SSN = null,
	) {
	}
}
