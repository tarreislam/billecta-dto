<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class DebtCollectionFromReconciliationInvoiceEntryView extends DataTransferObject
{
	public ?string $SourcePublicId = null;

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
	 * 0: SV
	 * 1: EN
	 * 2: FI
	 */
	public int $CommunicationLanguage;
	public ?string $ReasonDescription = null;

	/** Format: int32 */
	public int $NumberOfReminders;

	/**
	 * 0: LatePaymentFee
	 * 1: Reminders
	 * 2: DebtCollection
	 * 3: Bailiff
	 * -1: Unknown
	 */
	public int $StartDebtCollectionActionLevel;

	/** Format: int32 */
	public int $PaymentTermsInDays;
	public float $InterestPercentage;

	/**
	 * 0: Fixed
	 * 1: AboveEffectiveReference
	 * 2: NoInterest
	 * -1: Unknown
	 */
	public ?int $InterestType = null;
	public ?string $OurReference = null;
	public ?string $YourReference = null;

	/** Format: date-time */
	public string $OriginalInvoiceDate;

	/** Format: date-time */
	public string $OriginalDueDate;

	/** Format: int32 */
	public int $InterestStartInDaysAfterDueDate;
	public ?string $ReasonForHigherInterest = null;
	public ?string $Attention = null;
	public ?string $CareOf = null;
	public ?string $Address = null;
	public ?string $Address2 = null;
	public ?string $ZipCode = null;
	public ?string $City = null;
	public ?string $CountryCode = null;
	public ?string $Email = null;
	public ?string $Phone = null;
	public ?string $OrgNo = null;
	public bool $Eviction;
	public bool $InformSocialWelfare;
}
