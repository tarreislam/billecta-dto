<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class YearlyRecurrenceView extends DataTransferObject
{
	/** Format: int32 */
	public int $RecurOnDayInMonth;

	/** Format: int32 */
	public int $RecurOnMonth;

	/** Format: int32 */
	public int $RecurYearInterval;
}
