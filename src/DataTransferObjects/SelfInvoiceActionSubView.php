<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class SelfInvoiceActionSubView extends DataTransferObject
{
	public ?string $ActionPublicId = null;

	/** Format: guid */
	public string $CreditorPublicId;

	/** Format: guid */
	public string $DebtorPublicId;
	public ?string $CreditorOrgNo = null;
	public ?string $CreditorName = null;
	public ?AmountView $CurrentAmount = null;
	public ?AmountView $InvoicedAmount = null;
	public SelfInvoiceActionStageTypeView $Stage;

	/** Format: date-time */
	public string $Created;

	/** Format: date-time */
	public ?string $ClosedDate = null;
	public ?string $DebtorOrgNo = null;
	public ?string $DebtorName = null;
	public ?string $DebtorAccount = null;
	public ActionTypeView $ActionType;

	/** Format: date-time */
	public ?string $AttestedDate = null;

	/** Format: date-time */
	public ?string $InvoiceSentDate = null;
	public ?string $NextEvent = null;

	/** Format: date-time */
	public ?string $NextEventDate = null;

	/** Format: date-time */
	public string $DueDate;

	/** Format: date-time */
	public string $InvoiceDate;
	public ?string $InvoiceNumber = null;
	public ?string $BankgiroNo = null;
	public bool $IsCommented;
	public bool $IsPaused;
	public ?string $OCR = null;
	public DeliveryMethodTypeView $DeliveryMethod;
	public DeliveryStatusTypeView $DeliveryStatus;

	/** Format: date-time */
	public ?string $NextPaymentDate = null;
	public ?AmountView $NextPaymentAmount = null;
	public ?AmountView $TotalVATAmount = null;
	public ?FileView $File = null;
}
