<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class SelfInvoiceActionView extends Data
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
		public bool $CanPause,
		public bool $CanResume,
		public bool $CanCredit,
		public bool $CanRegisterPayment,
		public bool $CanMakeManual,
		public bool $CanSendManualInvoice,
		public bool $CanResendManualInvoice,
		public bool $CanCancel,
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
		public ?string $ActionPublicId = null,
		public ?DebtorView $Debtor = null,
		public ?SelfInvoiceActionStateView $State = null,
		public ?array $Invoices = null,
		public ?array $Records = null,
		public ?array $Events = null,
		/** Format: date-time */
		public ?string $DeliveryDate = null,
		public ?string $OurReference = null,
		public ?string $CreditingSelfInvoicePublicId = null,
		public ?string $YourReference = null,
		public ?string $ExternalId = null,
		public ?string $TransferReference = null,
		/**
		 * 0: None
		 * 1: OCR
		 * 2: Message
		 * @var string|int|null
		 */
		public string|int|null $TransferReferenceType = null,
		public ?AmountView $InvoicedAmount = null,
		public ?AmountView $InterestAmount = null,
		public ?AmountView $CurrentAmount = null,
		public ?AmountView $CreditedAmount = null,
		public ?AmountView $PaidAmount = null,
		public ?AmountView $TotalVATAmount = null,
		public ?string $Message = null,
		public ?SenderPaymentInfoView $SenderPaymentInfo = null,
		public ?array $Appendixes = null,
		public ?array $Attachments = null,
	) {
	}
}
