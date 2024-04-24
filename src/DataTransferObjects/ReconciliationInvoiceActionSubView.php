<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ReconciliationInvoiceActionSubView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $CreditorPublicId,
		/**
		 * 0: None
		 * 1: Created
		 * 6: Completed
		 * 12: InvoiceSent
		 * 16: SentToDebtCollection
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $Stage,
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
		public string $Created,
		public ?string $ActionPublicId = null,
		public ?string $CreditorOrgNo = null,
		public ?string $CreditorName = null,
		public ?string $DebtorOrgNo = null,
		public ?string $DebtorName = null,
		public ?string $DebtorPhone = null,
		public ?string $DebtorDebtorNo = null,
		public ?string $DebtorEmail = null,
		public ?AmountView $CurrentAmount = null,
		public ?AmountView $InvoicedAmount = null,
		/** Format: date-time */
		public ?string $ClosedDate = null,
		/** Format: date-time */
		public ?string $InvoiceSentDate = null,
		/** Format: date-time */
		public ?string $ReminderInvoiceSentDate = null,
		public ?string $InvoiceNumber = null,
		public ?string $OCR = null,
		public ?FileView $InvoiceFile = null,
		public ?string $DebtCollectionActionPublicId = null,
	) {
	}
}
