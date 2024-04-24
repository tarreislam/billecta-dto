<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ReconciliationInvoiceActionEntryView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $CreditorPublicId,
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
		/**
		 * 0: SV
		 * 1: EN
		 * 2: FI
		 * @var string|int
		 */
		public string|int $CommunicationLanguage,
		public ?ReconciliationDebtorView $Debtor = null,
		public ?string $ExternalUrl = null,
		public ?string $InvoiceNumber = null,
		public ?string $OCR = null,
		public ?FileView $InvoiceFile = null,
		public ?string $ExternalReference = null,
		public ?AmountView $CurrentAmount = null,
		public ?AmountView $CurrentReminderFees = null,
		public ?bool $SendWithColor = null,
		public ?bool $SendAsPriorityMail = null,
		/** Format: date-time */
		public ?string $AutogiroWithdrawalDate = null,
		/** Format: date-time */
		public ?string $CreditCardWithdrawalDate = null,
	) {
	}
}
