<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ReconciliationInvoiceActionSubView extends DataTransferObject
{
	public ?string $ActionPublicId = null;

	/** Format: guid */
	public string $CreditorPublicId;
	public ?string $CreditorOrgNo = null;
	public ?string $CreditorName = null;
	public ?string $DebtorOrgNo = null;
	public ?string $DebtorName = null;
	public ?string $DebtorPhone = null;
	public ?string $DebtorDebtorNo = null;
	public ?string $DebtorEmail = null;
	public ?AmountView $CurrentAmount = null;
	public ?AmountView $InvoicedAmount = null;
	public ReconciliationInvoiceActionStageTypeView $Stage;
	public DeliveryMethodTypeView $DeliveryMethod;
	public ActionTypeView $ActionType;

	/** Format: date-time */
	public ?string $ClosedDate = null;

	/** Format: date-time */
	public string $Created;

	/** Format: date-time */
	public ?string $InvoiceSentDate = null;

	/** Format: date-time */
	public ?string $ReminderInvoiceSentDate = null;
	public ?string $InvoiceNumber = null;
	public ?string $OCR = null;
	public ?FileView $InvoiceFile = null;
	public ?string $DebtCollectionActionPublicId = null;
}
