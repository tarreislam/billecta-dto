<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CreditCardPaymentView extends DataTransferObject
{
	/** Format: guid */
	public string $PaymentPublicId;

	/** Format: guid */
	public string $CreditorPublicId;

	/**
	 * 0: Pending
	 * 1: Succeeded
	 * 2: Failed
	 * 3: Refunded
	 * -1: Unknown
	 */
	public int $Status;
	public ?AmountView $Amount = null;
	public ?AmountView $RefundedAmount = null;

	/** Format: date-time */
	public string $PaymentDate;
	public ?string $ActionPublicId = null;

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
	 */
	public int $ActionType;
	public ?string $Comment = null;
	public ?string $PaymentWindowUrl = null;
	public ?string $SuccessUrl = null;
	public ?string $FailureUrl = null;

	/** Format: date-time */
	public string $Created;

	/**
	 * 0: SV
	 * 1: EN
	 * 2: FI
	 */
	public int $Language;
	public ?string $Funding = null;
	public ?string $Brand = null;
}
