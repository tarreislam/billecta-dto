<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class CreditorSubView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $CreditorPublicId,
		public bool $IsEnabled,
		public ?string $Name = null,
		public ?string $OrgNo = null,
		public ?string $LogoURL = null,
	) {
	}
}
