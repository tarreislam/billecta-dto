<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class DebtCollectionEntryView extends DataTransferObject
{
	/** Format: guid */
	public string $CreditorPublicId;

	/** Format: guid */
	public string $DebtorPublicId;
	public DeliveryMethodTypeView $DeliveryMethod;
	public LanguageTypeView $CommunicationLanguage;
	public ?string $ReasonDescription = null;

	/** Format: int32 */
	public int $NumberOfReminders;
	public DebtCollectionActionLevelTypeView $StartDebtCollectionActionLevel;
	public DebtCollectionActionLevelTypeView $EndDebtCollectionActionLevel;
	public ?AmountView $Value = null;

	/** Format: date-time */
	public string $OriginalInvoiceDate;

	/** Format: date-time */
	public string $OriginalDueDate;
	public ?string $OriginalInvoiceNumber = null;

	/** Format: int32 */
	public int $PaymentTermsInDays;
	public float $InterestPercentage;
	public ?InterestTypeView $InterestType = null;
	public ?string $OurReference = null;
	public ?string $YourReference = null;
	public ?FileView $OriginalInvoiceFile = null;

	/** Format: int32 */
	public int $InterestStartInDaysAfterDueDate;
	public ?string $ReasonForHigherInterest = null;
	public ?DeliveryAddressOverrideView $DeliveryAddressOverride = null;
	public ?PaymentOverrideView $PaymentOverride = null;
	public bool $Eviction;
	public bool $InformSocialWelfare;
}
