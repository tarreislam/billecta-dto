<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class CurrencyView extends Data
{
	public function __construct(
		/** Format: int32 */
		public int $Decimals,
		/** Format: int64 */
		public int $OneUnit,
		public ?string $CurrencyCode = null,
		public ?string $Iso4217 = null,
		public ?string $Description = null,
	) {
	}
}
