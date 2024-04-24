<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class SecureTokenView extends Data
{
	public function __construct(
		/** Format: date-time */
		public string $Expires,
		public ?string $Value = null,
	) {
	}
}
