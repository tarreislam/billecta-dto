<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class SelfInvoiceActionEntryView extends DataTransferObject
{
	/** Format: guid */
	public string $CreditorPublicId;

	/** Format: guid */
	public string $DebtorPublicId;

	/** Format: date-time */
	public string $InvoiceDate;

	/** Format: date-time */
	public string $DueDate;

	/** Format: date-time */
	public ?string $DeliveryDate = null;
	public ?array $Records = null;
	public ?string $OurReference = null;
	public ?string $BankgiroNo = null;
	public ?string $TransferReference = null;
	public ?ReferenceTypeView $TransferReferenceType = null;
	public ?string $YourReference = null;
	public ?string $ExternalId = null;
	public DeliveryMethodTypeView $DeliveryMethod;
	public LanguageTypeView $CommunicationLanguage;
	public ?string $Message = null;
	public ?array $Appendixes = null;
	public ?array $Attachments = null;
	public ?string $CreditingSelfInvoicePublicId = null;
}
