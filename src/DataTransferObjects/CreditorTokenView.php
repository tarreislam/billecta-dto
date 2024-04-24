<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class CreditorTokenView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $Token,
		public ?string $PortalURL = null,
	) {
	}
}
