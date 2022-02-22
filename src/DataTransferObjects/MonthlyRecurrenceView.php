<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class MonthlyRecurrenceView extends DataTransferObject
{
	/** Format: int32 */
	public int $RecurOnDayInMonth;

	/** Format: int32 */
	public int $RecurMonthInterval;
}
