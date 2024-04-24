<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class UserSubscribedInvoiceView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $UserPublicId,
		public ?string $ActionPublicId = null,
	) {
	}
}
