<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class InvoiceActionEntryView extends Data
{
	public function __construct(
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
		public string|int $ActionType,
		/** Format: guid */
		public string $CreditorPublicId,
		/** Format: guid */
		public string $DebtorPublicId,
		/** Format: date-time */
		public string $InvoiceDate,
		/** Format: date-time */
		public string $DueDate,
		public float $InterestPercentage,
		/** Format: int32 */
		public int $InterestStartInDaysAfterDueDate,
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
		public bool $VatIsIncluded,
		public bool $IsLocked,
		public bool $UseDebtorBalance,
		/** Format: date-time */
		public ?string $DeliveryDate = null,
		public ?array $Records = null,
		public ?string $ReasonForHigherInterest = null,
		/**
		 * 0: Fixed
		 * 1: AboveEffectiveReference
		 * 2: NoInterest
		 * -1: Unknown
		 * @var string|int|null
		 */
		public string|int|null $InterestType = null,
		public ?string $OurReference = null,
		public ?string $YourReference = null,
		public ?string $Message = null,
		public ?string $InvoiceNumber = null,
		public ?AmountView $InvoiceFee = null,
		public ?AmountView $FreightFee = null,
		/** Format: int32 */
		public ?int $SendByMailIfEmailNotViewedInDays = null,
		public ?DeliveryAddressOverrideView $DeliveryAddressOverride = null,
		public ?DebtCollectionDetailsView $DebtCollectionDetails = null,
		public ?ReminderInvoiceDetailsView $ReminderInvoiceDetails = null,
		public ?ReverseVATDetailsView $ReverseVATDetails = null,
		public ?RotRutDetailsView $RotRutDetails = null,
		public ?PaymentOverrideView $PaymentOverride = null,
		public ?array $Appendixes = null,
		public ?array $Attachments = null,
		public ?AutogiroWithdrawalView $Autogiro = null,
		public ?CreditCardWithdrawalView $CreditCard = null,
		public ?InvoiceFileView $InvoicePDF = null,
		public ?string $CreditingInvoicePublicId = null,
		public ?string $ExternalReference = null,
		/** Format: date-time */
		public ?string $InvoiceSendDateOverride = null,
	) {
	}
}
