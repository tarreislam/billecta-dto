<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class CreditCardPaymentView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $PaymentPublicId,
		/** Format: guid */
		public string $CreditorPublicId,
		/**
		 * 0: Pending
		 * 1: Succeeded
		 * 2: Failed
		 * 3: Refunded
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $Status,
		/** Format: date-time */
		public string $PaymentDate,
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
		/**
		 * 0: SV
		 * 1: EN
		 * 2: FI
		 * @var string|int
		 */
		public string|int $Language,
		public ?AmountView $Amount = null,
		public ?AmountView $RefundedAmount = null,
		public ?string $ActionPublicId = null,
		public ?string $Comment = null,
		public ?string $PaymentWindowUrl = null,
		public ?string $SuccessUrl = null,
		public ?string $FailureUrl = null,
		public ?string $Funding = null,
		public ?string $Brand = null,
	) {
	}
}
