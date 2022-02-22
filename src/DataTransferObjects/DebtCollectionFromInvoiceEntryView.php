<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class DebtCollectionFromInvoiceEntryView extends DataTransferObject
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
	public ?string $ReasonDescription = null;

	/** Format: int32 */
	public int $NumberOfReminders;

	/**
	 * 0: LatePaymentFee
	 * 1: Reminders
	 * 2: DebtCollection
	 * 3: Bailiff
	 * -1: Unknown
	 * @var string|int
	 */
	public $StartDebtCollectionActionLevel;

	/**
	 * 0: LatePaymentFee
	 * 1: Reminders
	 * 2: DebtCollection
	 * 3: Bailiff
	 * -1: Unknown
	 * @var string|int
	 */
	public $EndDebtCollectionActionLevel;

	/** Format: int32 */
	public int $PaymentTermsInDays;
	public float $InterestPercentage;

	/**
	 * 0: Fixed
	 * 1: AboveEffectiveReference
	 * 2: NoInterest
	 * -1: Unknown
	 * @var string|int
	 */
	public $InterestType = null;
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
