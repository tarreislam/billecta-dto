<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class AmountView extends Data
{
	public function __construct(
		/** Format: int64 */
		public int $Value,
		public float $ValueForView,
		public ?string $CurrencyCode = null,
	) {
	}
}
