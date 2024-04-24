<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class DimensionCodeView extends Data
{
	public function __construct(
		/** Format: int32 */
		public int $Dimension,
		public ?string $Code = null,
	) {
	}
}
