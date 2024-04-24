<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class InvoiceActionView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $CreditorPublicId,
		/**
		 * 0: SV
		 * 1: EN
		 * 2: FI
		 * @var string|int
		 */
		public string|int $CommunicationLanguage,
		/** Format: date-time */
		public string $Created,
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
		/** Format: date-time */
		public string $InvoiceDate,
		/** Format: date-time */
		public string $DueDate,
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
		public bool $CanPause,
		public bool $CanResume,
		public bool $CanCreateCreditInvoice,
		public bool $CanCreateInterestInvoice,
		public bool $CanRegisterPayment,
		public bool $CanMakeManual,
		public bool $CanSendManualInvoice,
		public bool $CanResendManualInvoice,
		public bool $CanSendManualReminderInvoice,
		public bool $CanPostpone,
		public bool $CanSendToDebtCollection,
		public bool $CanDispute,
		public bool $CanUnDispute,
		public bool $CanSell,
		public bool $CanCancelSalesRequest,
		public bool $CanCreateAutogiroWithdrawal,
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
		public bool $VatIsIncluded,
		public ?string $ActionPublicId = null,
		public ?DebtorView $Debtor = null,
		public ?InvoiceActionStateView $State = null,
		public ?array $Invoices = null,
		public ?array $Records = null,
		public ?array $Events = null,
		/** Format: date-time */
		public ?string $DeliveryDate = null,
		public ?string $OurReference = null,
		public ?string $YourReference = null,
		public ?AmountView $InvoicedAmount = null,
		public ?AmountView $InterestAmount = null,
		public ?AmountView $RotRutDeductionAmount = null,
		public ?AmountView $CurrentAmount = null,
		public ?AmountView $CreditedAmount = null,
		public ?AmountView $PaidAmount = null,
		public ?AmountView $WriteOffAmount = null,
		public ?AmountView $AwaitingPaymentTransferAmount = null,
		public ?AmountView $TotalVATAmount = null,
		public ?AmountView $CentRoundingAmount = null,
		public ?string $DebtCollectionActionPublicId = null,
		public ?string $ReminderInvoiceActionPublicId = null,
		public ?DeliveryAddressOverrideView $DeliveryAddressOverride = null,
		public ?CreditingInvoiceView $CreditingInvoice = null,
		public ?AutogiroWithdrawalView $Autogiro = null,
		public ?CreditCardWithdrawalView $CreditCard = null,
		public ?string $Message = null,
		public ?string $InvoiceNumber = null,
		public ?PaymentOverrideView $PaymentOverride = null,
		public ?DebtCollectionDetailsView $DebtCollectionDetails = null,
		public ?ReminderInvoiceDetailsView $ReminderInvoiceDetails = null,
		public ?ReverseVATDetailsView $ReverseVATDetails = null,
		public ?RotRutDetailsView $RotRutDetails = null,
		public ?string $ReasonForHigherInterest = null,
		public ?array $Appendixes = null,
		public ?array $Attachments = null,
		public ?AmountView $InvoiceFee = null,
		public ?AmountView $FreightFee = null,
		/** Format: int32 */
		public ?int $SendByMailIfEmailNotViewedInDays = null,
		public ?string $ExternalReference = null,
		public ?string $ContractInvoiceActionPublicId = null,
	) {
	}
}
