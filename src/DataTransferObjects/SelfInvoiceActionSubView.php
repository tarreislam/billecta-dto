<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class SelfInvoiceActionSubView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $CreditorPublicId,
		/** Format: guid */
		public string $DebtorPublicId,
		/**
		 * 0: None
		 * 1: Created
		 * 5: Manual
		 * 6: Completed
		 * 7: Cancelled
		 * 12: InvoiceSent
		 * 13: Attested
		 * 18: PaymentSent
		 * 19: PaymentCancelled
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $Stage,
		/** Format: date-time */
		public string $Created,
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
		/** Format: date-time */
		public string $DueDate,
		/** Format: date-time */
		public string $InvoiceDate,
		public bool $IsCommented,
		public bool $IsPaused,
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
		 * 0: Unknown
		 * 1: Received
		 * 2: Opened
		 * 3: Viewed
		 * @var string|int
		 */
		public string|int $DeliveryStatus,
		public ?string $ActionPublicId = null,
		public ?string $CreditorOrgNo = null,
		public ?string $CreditorName = null,
		public ?AmountView $CurrentAmount = null,
		public ?AmountView $InvoicedAmount = null,
		/** Format: date-time */
		public ?string $ClosedDate = null,
		public ?string $DebtorOrgNo = null,
		public ?string $DebtorName = null,
		public ?string $DebtorAccount = null,
		/** Format: date-time */
		public ?string $AttestedDate = null,
		/** Format: date-time */
		public ?string $InvoiceSentDate = null,
		public ?string $NextEvent = null,
		/** Format: date-time */
		public ?string $NextEventDate = null,
		public ?string $InvoiceNumber = null,
		public ?string $BankgiroNo = null,
		public ?string $OCR = null,
		/** Format: date-time */
		public ?string $NextPaymentDate = null,
		public ?AmountView $NextPaymentAmount = null,
		public ?AmountView $TotalVATAmount = null,
		public ?FileView $File = null,
		public ?string $YourReference = null,
	) {
	}
}
