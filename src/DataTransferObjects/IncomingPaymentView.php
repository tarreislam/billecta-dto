<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class IncomingPaymentView extends DataTransferObject
{
	/** Format: guid */
	public string $CreditorPublicId;
	public ?string $InvoiceNumber = null;
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

	/** Format: guid */
	public string $DebtorPublicId;
	public ?string $DebtorName = null;
	public ?AmountView $Amount = null;

	/** Format: date-time */
	public string $CreatedDate;

	/** Format: date-time */
	public string $PaymentDate;
	public ?string $PaymentMeanCode = null;
	public ?FileView $File = null;

	/** Format: guid */
	public string $PaymentReferenceId;
	public ?string $ExternalReference = null;
	public ?string $OCR = null;
	public ?string $CreatedBy = null;
	public bool $IsReminderPayment;
}
