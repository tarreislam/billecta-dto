<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class CreditorSignatoryContactView extends Data
{
	public function __construct(
		public ?string $FirstName = null,
		public ?string $LastName = null,
		public ?string $Email = null,
		public ?string $Phone = null,
	) {
	}
}
