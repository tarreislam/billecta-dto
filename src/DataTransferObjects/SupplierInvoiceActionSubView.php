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
	public SupplierInvoiceActionStageTypeView $Stage;
	public ActionTypeView $ActionType;

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
	public OriginTypeView $Origin;
	public ?string $ExternalSourceId = null;
}
