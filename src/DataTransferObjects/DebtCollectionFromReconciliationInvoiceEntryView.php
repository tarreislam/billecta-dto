<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class DebtCollectionFromReconciliationInvoiceEntryView extends DataTransferObject
{
	public ?string $SourcePublicId = null;
	public DeliveryMethodTypeView $DeliveryMethod;
	public LanguageTypeView $CommunicationLanguage;
	public ?string $ReasonDescription = null;

	/** Format: int32 */
	public int $NumberOfReminders;
	public DebtCollectionActionLevelTypeView $StartDebtCollectionActionLevel;

	/** Format: int32 */
	public int $PaymentTermsInDays;
	public float $InterestPercentage;
	public ?InterestTypeView $InterestType = null;
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
