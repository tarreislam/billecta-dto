<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class DebtCollectionActionLevelTypeView extends DataTransferObject
{
	/**
	 * 0: LatePaymentFee
	 * 1: Reminders
	 * 2: DebtCollection
	 * 3: Bailiff
	 * -1: Unknown
	 */
	public int $value;
}
