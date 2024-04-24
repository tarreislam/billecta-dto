<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class DebtorDefaultActionConfigView extends Data
{
	public function __construct(
		public bool $ActivateDefaultActionConfigOverride,
		/**
		 * 0: LatePaymentFee
		 * 1: Reminders
		 * 2: DebtCollection
		 * 3: Bailiff
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $StartDebtCollectionActionLevel,
		/**
		 * 0: LatePaymentFee
		 * 1: Reminders
		 * 2: DebtCollection
		 * 3: Bailiff
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $EndDebtCollectionActionLevel,
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
		/** Format: int32 */
		public int $PaymentTermsInDays,
		/** Format: int32 */
		public int $DebtCollectionPaymentTermsInDays,
		/** Format: int32 */
		public int $InterestTermsInDays,
		public float $InterestPercentage,
		/** Format: int32 */
		public int $InvoicePaymentTermsInDays,
		/**
		 * 0: Fixed
		 * 1: AboveEffectiveReference
		 * 2: NoInterest
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $InterestType,
		/** Format: int32 */
		public int $InterestStartInDaysAfterDueDate,
		/** Format: int32 */
		public int $NumberOfReminders,
		/** Format: int32 */
		public int $SendInvoiceToDebtCollectionAfterDays,
		public bool $SendInvoiceToDebtCollection,
		public bool $SendReminderInvoice,
		/** Format: int32 */
		public int $SendReminderInvoiceDaysAfterDueDate,
		public float $InvoiceFee,
		public float $ReminderInvoiceFee,
		/** Format: int32 */
		public int $SendByMailIfEmailNotViewedInDays,
		public bool $SendByMailIfEmailNotViewedInDaysEnabled,
		/** Format: int32 */
		public int $ReminderInvoicePaymentTermsInDays,
		public ?string $ReasonForHigherInterest = null,
		public ?string $OurReference = null,
		public ?string $CurrencyCode = null,
		public ?bool $IncludePdfInEmail = null,
		public ?string $InvoiceComment = null,
	) {
	}
}
