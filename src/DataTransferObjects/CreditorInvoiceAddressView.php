<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class CreditorInvoiceAddressView extends Data
{
	public function __construct(
		/**
		 * 0: Email
		 * 1: Mail
		 * 2: Manually
		 * 3: SMS
		 * 4: EInvoice
		 * 5: Kivra
		 * 6: Avy
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $DeliveryMethod,
		public ?string $Address = null,
		public ?string $Address2 = null,
		public ?string $ZipCode = null,
		public ?string $City = null,
		public ?string $CountryCode = null,
		public ?string $Email = null,
	) {
	}
}
