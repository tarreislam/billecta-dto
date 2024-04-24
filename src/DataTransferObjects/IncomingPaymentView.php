<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class IncomingPaymentView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $CreditorPublicId,
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
		public string $DebtorPublicId,
		/** Format: date-time */
		public string $CreatedDate,
		/** Format: date-time */
		public string $PaymentDate,
		/** Format: guid */
		public string $PaymentReferenceId,
		public bool $IsReminderPayment,
		public ?string $InvoiceNumber = null,
		public ?string $ActionPublicId = null,
		public ?string $DebtorName = null,
		public ?AmountView $Amount = null,
		public ?string $PaymentMeanCode = null,
		public ?FileView $File = null,
		public ?string $ExternalReference = null,
		public ?string $OCR = null,
		public ?string $CreatedBy = null,
	) {
	}
}
