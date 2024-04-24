<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class SmsDeliveryView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $CreditorPublicId,
		public ?string $ReceiverPhone = null,
		public ?string $Message = null,
		public ?string $CountryCode = null,
	) {
	}
}
