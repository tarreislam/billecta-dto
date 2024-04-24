<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class DebtCollectionMessageView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $PublicId,
		public bool $IsActive,
		public ?string $Message = null,
	) {
	}
}
