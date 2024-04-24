<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class CreditorKycFormUsPersonView extends Data
{
	public function __construct(
		public ?string $Name = null,
		public ?string $Address = null,
		public ?string $TIN = null,
	) {
	}
}
