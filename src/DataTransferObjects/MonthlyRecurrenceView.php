<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class MonthlyRecurrenceView extends Data
{
	public function __construct(
		/** Format: int32 */
		public int $RecurOnDayInMonth,
		/** Format: int32 */
		public int $RecurMonthInterval,
	) {
	}
}
