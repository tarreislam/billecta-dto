<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class StreamView extends Data
{
	public function __construct(
		/** Format: byte */
		public ?string $Data = null,
	) {
	}
}
