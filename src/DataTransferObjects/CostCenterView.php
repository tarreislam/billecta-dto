<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class CostCenterView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $CreditorPublicId,
		public bool $Active,
		public ?string $Code = null,
		public ?string $Description = null,
		public ?string $Comments = null,
	) {
	}
}
