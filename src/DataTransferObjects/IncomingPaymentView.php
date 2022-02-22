<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class IncomingPaymentView extends DataTransferObject
{
	/** Format: guid */
	public string $CreditorPublicId;
	public ?string $InvoiceNumber = null;
	public ?string $ActionPublicId = null;
	public ActionTypeView $ActionType;

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
