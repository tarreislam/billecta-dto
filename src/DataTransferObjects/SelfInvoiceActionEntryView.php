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

	/**
	 * 0: None
	 * 1: OCR
	 * 2: Message
	 * @var string|int|null
	 */
	public $TransferReferenceType = null;
	public ?string $YourReference = null;
	public ?string $ExternalId = null;

	/**
	 * 0: Email
	 * 1: Mail
	 * 2: Manually
	 * 3: SMS
	 * 4: EInvoice
	 * 5: Kivra
	 * -1: Unknown
	 * @var string|int
	 */
	public $DeliveryMethod;

	/**
	 * 0: SV
	 * 1: EN
	 * 2: FI
	 * @var string|int
	 */
	public $CommunicationLanguage;
	public ?string $Message = null;
	public ?array $Appendixes = null;
	public ?array $Attachments = null;
	public ?string $CreditingSelfInvoicePublicId = null;
}
