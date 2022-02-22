<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class DebtCollectionActionInvoiceView extends DataTransferObject
{
	/** Format: date-time */
	public string $InvoiceDate;

	/** Format: date-time */
	public string $DueDate;
	public ?string $InvoiceNumber = null;
	public ?string $InvoiceDecription = null;

	/** Format: int32 */
	public int $PaymentTermsInDays;

	/** Format: int32 */
	public int $InterestTermsInDays;
	public float $InterestPercentage;
	public InterestTypeView $InterestType;
	public ?string $OurReference = null;
	public ?string $YourReference = null;
	public ?string $Name = null;
	public ?string $Address = null;
	public ?string $Address2 = null;
	public ?string $ZipCode = null;
	public ?string $City = null;
	public ?string $CountryCode = null;
	public ?AmountView $InvoicedAmount = null;
	public ?FileView $InvoiceFile = null;
	public ?string $OCR = null;
}
