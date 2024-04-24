<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class DebtCollectionActionView extends Data
{
	public function __construct(
		/** Format: date-time */
		public string $Created,
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
		/** Format: int32 */
		public int $NumberOfReminders,
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
		/** Format: date-time */
		public string $OriginalInvoiceDate,
		/** Format: date-time */
		public string $OriginalDueDate,
		/** Format: int32 */
		public int $PaymentTermsInDays,
		/** Format: int32 */
		public int $InterestTermsInDays,
		public float $InterestPercentage,
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
		/**
		 * 0: None
		 * 1: DebtCollectionAction
		 * 2: InvoiceAction
		 * 3: ReconciliationInvoiceAction
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $DebtCollectionActionSource,
		public bool $CanCancel,
		public bool $CanCredit,
		public bool $CanSendToBailiff,
		public bool $CanSendToBailiffEnforcement,
		public bool $CanSendToLongTermSurveilance,
		public bool $CanPostpone,
		public bool $CanCreateInstallmentPlan,
		public bool $CanDisputeAction,
		public ?string $ActionPublicId = null,
		public ?DebtorView $Debtor = null,
		public ?string $ReasonDescription = null,
		public ?string $OriginalInvoiceNumber = null,
		public ?AmountView $OriginalAmount = null,
		public ?FileView $OriginalInvoiceFile = null,
		public ?string $OurReference = null,
		public ?string $YourReference = null,
		public ?string $ReasonForHigherInterest = null,
		public ?AmountView $DebtAmount = null,
		public ?AmountView $FeeAmount = null,
		public ?AmountView $InterestAmount = null,
		public ?AmountView $CurrentAmount = null,
		public ?DebtCollectionActionStateView $State = null,
		public ?array $Invoices = null,
		public ?string $InstallmentPlanPublicId = null,
		public ?string $InvoiceSourcePublicId = null,
		public ?DeliveryAddressOverrideView $DeliveryAddressOverride = null,
		public ?array $Events = null,
	) {
	}
}
