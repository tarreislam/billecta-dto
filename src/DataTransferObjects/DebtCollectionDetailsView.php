<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class DebtCollectionDetailsView extends DataTransferObject
{
	public bool $SendToDebtCollection;
	public DebtCollectionActionLevelTypeView $StartDebtCollectionActionLevel;
	public DebtCollectionActionLevelTypeView $EndDebtCollectionActionLevel;

	/** Format: int32 */
	public int $NumberOfReminders;

	/** Format: int32 */
	public int $DaysDelayAfterDueDate;

	/** Format: int32 */
	public int $PaymentTermsInDays;
	public bool $Eviction;
	public bool $InformSocialWelfare;
}
