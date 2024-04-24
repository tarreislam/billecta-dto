<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class AccountingDimensionView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $CreditorPublicId,
		/** Format: int32 */
		public int $Dimension,
		public bool $Active,
		public ?string $Name = null,
		public ?string $Code = null,
		public ?string $Description = null,
		public ?string $Comments = null,
	) {
	}
}
