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
	public InvoiceActionStageTypeView $Stage;
	public ActionTypeView $ActionType;
	public DeliveryMethodTypeView $DeliveryMethod;
	public DeliveryStatusTypeView $DeliveryStatus;

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
