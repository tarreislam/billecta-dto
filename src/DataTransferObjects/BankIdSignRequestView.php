<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class BankIdSignRequestView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $CreditorPublicId,
		public bool $TokenStartRequired,
		public ?string $SSN = null,
		public ?string $UserMessage = null,
		public ?string $UserNonVisibleData = null,
	) {
	}
}
