<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class VerificationInvoiceActionEntryView extends DataTransferObject
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
	public ?string $YourReference = null;

	/**
	 * 0: SV
	 * 1: EN
	 * 2: FI
	 */
	public int $CommunicationLanguage;
	public ?string $Message = null;
	public ?string $InvoiceNumber = null;
	public ?InvoiceBookkeepingOverrideView $BookkeepingOverride = null;
	public ?PaymentOverrideView $PaymentOverride = null;
	public ?string $ExternalReference = null;
}
