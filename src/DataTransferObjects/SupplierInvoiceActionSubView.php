<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class SupplierInvoiceActionSubView extends DataTransferObject
{
	public ?string $ActionPublicId = null;

	/** Format: guid */
	public string $CreditorPublicId;

	/** Format: guid */
	public string $SupplierPublicId;
	public ?string $CreditorOrgNo = null;
	public ?string $CreditorName = null;
	public ?AmountView $CurrentAmount = null;
	public ?AmountView $InvoicedAmount = null;

	/**
	 * 0: None
	 * 1: Created
	 * 5: Manual
	 * 6: Completed
	 * 7: Cancelled
	 * 13: Attested
	 * 18: PaymentSent
	 * 19: PaymentCancelled
	 * -1: Unknown
	 */
	public int $Stage;

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

	/** Format: date-time */
	public string $Created;

	/** Format: date-time */
	public ?string $ClosedDate = null;
	public ?string $SupplierOrgNo = null;
	public ?string $SupplierName = null;

	/** Format: date-time */
	public ?string $AttestedDate = null;
	public ?string $NextEvent = null;

	/** Format: date-time */
	public ?string $NextEventDate = null;

	/** Format: date-time */
	public ?string $NextPaymentDate = null;
	public ?AmountView $NextPaymentAmount = null;

	/** Format: date-time */
	public string $DueDate;

	/** Format: date-time */
	public string $InvoiceDate;
	public ?string $InvoiceNumber = null;
	public bool $IsPaused;
	public ?string $OCR = null;
	public ?FileView $InvoiceFile = null;

	/**
	 * 0: InternalApi
	 * 3: FortnoxOrder
	 * 4: InternalSystem
	 * 6: Fortnox
	 * 7: PeAccountingInvoice
	 * 10: Kommed
	 */
	public int $Origin;
	public ?string $ExternalSourceId = null;
}
