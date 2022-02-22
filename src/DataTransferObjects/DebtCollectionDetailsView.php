<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class DebtCollectionDetailsView extends DataTransferObject
{
	public bool $SendToDebtCollection;

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
	public int $NumberOfReminders;

	/** Format: int32 */
	public int $DaysDelayAfterDueDate;

	/** Format: int32 */
	public int $PaymentTermsInDays;
	public bool $Eviction;
	public bool $InformSocialWelfare;
}
