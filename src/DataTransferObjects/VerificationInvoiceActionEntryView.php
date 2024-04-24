<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class VerificationInvoiceActionEntryView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $CreditorPublicId,
		/** Format: guid */
		public string $DebtorPublicId,
		/** Format: date-time */
		public string $InvoiceDate,
		/** Format: date-time */
		public string $DueDate,
		/**
		 * 0: SV
		 * 1: EN
		 * 2: FI
		 * @var string|int
		 */
		public string|int $CommunicationLanguage,
		/** Format: date-time */
		public ?string $DeliveryDate = null,
		public ?array $Records = null,
		public ?string $OurReference = null,
		public ?string $YourReference = null,
		public ?string $Message = null,
		public ?string $InvoiceNumber = null,
		public ?InvoiceBookkeepingOverrideView $BookkeepingOverride = null,
		public ?PaymentOverrideView $PaymentOverride = null,
		public ?string $ExternalReference = null,
	) {
	}
}
