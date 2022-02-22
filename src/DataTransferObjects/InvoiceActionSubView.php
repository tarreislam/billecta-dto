<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class InvoiceActionSubView extends DataTransferObject
{
	public ?string $ActionPublicId = null;

	/** Format: guid */
	public string $CreditorPublicId;

	/** Format: guid */
	public string $DebtorPublicId;
	public ?string $CreditorOrgNo = null;
	public ?string $CreditorName = null;
	public ?string $DebtorOrgNo = null;
	public ?string $DebtorName = null;
	public ?AmountView $CurrentAmount = null;
	public ?AmountView $InvoicedAmount = null;

	/**
	 * 0: None
	 * 1: Created
	 * 2: ReminderInvoiceSent
	 * 5: Manual
	 * 6: Completed
	 * 7: Cancelled
	 * 12: InvoiceSent
	 * 13: Attested
	 * 16: SentToDebtCollection
	 * 20: SalesRequested
	 * 21: SaleRequestAccepted
	 * 22: SalesRequestedCancelled
	 * 23: SalesRequestedDenied
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

	/**
	 * 0: Email
	 * 1: Mail
	 * 2: Manually
	 * 3: SMS
	 * 4: EInvoice
	 * 5: Kivra
	 * -1: Unknown
	 */
	public int $DeliveryMethod;

	/**
	 * 0: Unknown
	 * 1: Received
	 * 2: Opened
	 * 3: Viewed
	 */
	public int $DeliveryStatus;

	/** Format: date-time */
	public ?string $ClosedDate = null;

	/** Format: date-time */
	public string $Created;

	/** Format: date-time */
	public ?string $InvoiceSentDate = null;

	/** Format: date-time */
	public ?string $ReminderInvoiceSentDate = null;

	/** Format: date-time */
	public ?string $AttestedDate = null;

	/** Format: date-time */
	public ?string $NextEventDate = null;

	/** Format: date-time */
	public string $DueDate;

	/** Format: date-time */
	public string $InvoiceDate;
	public ?string $InvoiceNumber = null;
	public bool $IsCommented;
	public bool $IsLocked;
	public bool $IsPaused;
	public ?string $OCR = null;
	public ?string $ContractInvoiceActionPublicId = null;
	public ?FileView $File = null;
	public ?string $NextEvent = null;
	public bool $HasAwaitingPayment;
	public ?AmountView $AwaitingPaymentTransferAmount = null;
	public ?AmountView $TotalVATAmount = null;
	public bool $IsDisputed;
	public ?string $DebtCollectionActionPublicId = null;
	public ?string $ReminderInvoiceActionPublicId = null;
	public bool $AutogiroWithdrawalEnabled;
}
