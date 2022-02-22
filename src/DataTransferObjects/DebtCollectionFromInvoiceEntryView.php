<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class DebtCollectionFromInvoiceEntryView extends DataTransferObject
{
	public ?string $SourcePublicId = null;
	public DeliveryMethodTypeView $DeliveryMethod;
	public LanguageTypeView $CommunicationLanguage;
	public ?string $ReasonDescription = null;

	/** Format: int32 */
	public int $NumberOfReminders;
	public DebtCollectionActionLevelTypeView $StartDebtCollectionActionLevel;
	public DebtCollectionActionLevelTypeView $EndDebtCollectionActionLevel;

	/** Format: int32 */
	public int $PaymentTermsInDays;
	public float $InterestPercentage;
	public ?InterestTypeView $InterestType = null;
	public ?string $OurReference = null;
	public ?string $YourReference = null;

	/** Format: int32 */
	public int $InterestStartInDaysAfterDueDate;
	public ?string $ReasonForHigherInterest = null;
	public ?DeliveryAddressOverrideView $DeliveryAddressOverride = null;
	public ?PaymentOverrideView $PaymentOverride = null;
	public bool $Eviction;
	public bool $InformSocialWelfare;
}
