<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class DefaultActionConfigView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $CreditorPublicId,
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
		public float $ReminderInvoiceFee,
		public float $InvoiceFee,
		/** Format: int32 */
		public int $SendByMailIfEmailNotViewedInDays,
		public bool $SendByMailIfEmailNotViewedInDaysEnabled,
		public bool $SendAsPriorityMail,
		public bool $SendWithColor,
		public bool $SendDebtCollectionsWithMail,
		/** Format: int32 */
		public int $ReminderInvoicePaymentTermsInDays,
		public bool $DoNotAutomaticallySendForeignInvoicesToDebtCollection,
		public bool $ShowUnpaidInvoicesOnNextInvoice,
		public bool $UsageOfDebtorBalanceIsAppliedByDefault,
		public bool $DontRequestDueClaimResponse,
		public ?string $ReasonForHigherInterest = null,
		public ?string $OurReference = null,
		public ?string $CurrencyCode = null,
		public ?string $ReasonDescription = null,
		public ?bool $IncludePdfInEmail = null,
		public ?array $AutomaticInvoiceWriteOffThresholds = null,
		public ?array $InvoiceFeeOnlyOnDeliveryMethods = null,
		public ?string $InvoiceComment = null,
		/** Format: int32 */
		public ?int $ReminderGraceDays = null,
		public ?float $MinAmountForSendingReminder = null,
		public ?float $MinAmountForSendingDebtCollectionAction = null,
		public ?array $IncomingPaymentNotificationMethods = null,
		/** Format: guid */
		public ?string $DebtCollectionMessagePublicId = null,
	) {
	}
}
