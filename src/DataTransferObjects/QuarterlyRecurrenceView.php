<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class QuarterlyRecurrenceView extends Data
{
	public function __construct(
		/** Format: int32 */
		public int $RecurOnDayInMonth,
		/** Format: int32 */
		public int $RecurOnMonth,
		/** Format: int32 */
		public int $RecurQuarterInterval,
	) {
	}
}
