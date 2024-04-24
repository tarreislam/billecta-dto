<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ContractInvoiceActionView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $CreditorPublicId,
		/** Format: guid */
		public string $DebtorPublicId,
		/** Format: int32 */
		public int $PaymentTermsInDays,
		/** Format: int32 */
		public int $InterestTermsInDays,
		public float $InterestPercentage,
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
		public int $InterestStartInDaysAfterDueDate,
		public bool $AutoAttest,
		public bool $AutoMerge,
		public bool $PayLastDayOfMonth,
		/**
		 * 0: None
		 * 1: Previous
		 * 2: Current
		 * 3: Next
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $InvoicePeriod,
		/** Format: int32 */
		public int $InvoicePeriodMonthsOffset,
		public bool $HideDateOnPeriodisedRecords,
		public bool $AutogiroWithdrawalEnabled,
		public bool $CreditCardWithdrawalEnabled,
		public bool $VatIsIncluded,
		/**
		 * 0: DebtCollectionAction
		 * 1: InstallmentPlanAction
		 * 2: InvoiceAction
		 * 3: CreditInvoiceAction
		 * 5: ContractInvoiceAction
		 * 6: SelfInvoiceAction
		 * 7: VerificationInvoiceAction
		 * 8: DebentureAction
		 * 9: InterestInvoiceAction
		 * 10: SupplierInvoiceAction
		 * 11: ReconciliationInvoiceAction
		 * 12: OrderAction
		 * 13: OrderInvoiceAction
		 * 14: PaymentAdviceAction
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $GenerateInvoicesOfActionType,
		public ?string $ActionPublicId = null,
		public ?AmountView $Amount = null,
		public ?array $Records = null,
		public ?string $ReasonForHigherInterest = null,
		public ?string $OurReference = null,
		public ?string $YourReference = null,
		/**
		 * 0: Fixed
		 * 1: AboveEffectiveReference
		 * 2: NoInterest
		 * -1: Unknown
		 * @var string|int|null
		 */
		public string|int|null $InterestType = null,
		public ?string $Message = null,
		public ?string $ExternalReference = null,
		public ?DeliveryAddressOverrideView $DeliveryAddressOverride = null,
		public ?DebtCollectionDetailsView $DebtCollectionDetails = null,
		public ?ReverseVATDetailsView $ReverseVATDetails = null,
		public ?RecurrenceDetailsView $RecurrenceDetails = null,
		public ?RotRutDetailsView $RotRutDetails = null,
		public ?PaymentOverrideView $PaymentOverride = null,
		public ?ContractInvoiceActionStateView $State = null,
		public ?array $Appendixes = null,
		public ?array $Attachments = null,
		public ?string $ContractNumber = null,
		public ?AmountView $InvoiceFee = null,
		public ?AmountView $FreightFee = null,
		/** Format: int32 */
		public ?int $SendByMailIfEmailNotViewedInDays = null,
		public ?array $Events = null,
		public ?ReminderInvoiceDetailsView $ReminderInvoiceDetails = null,
	) {
	}
}
