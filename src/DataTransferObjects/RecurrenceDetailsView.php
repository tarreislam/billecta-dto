<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class RecurrenceDetailsView extends Data
{
	public function __construct(
		/**
		 * 0: Monthly
		 * 1: Yearly
		 * 2: Quarterly
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $RecurrenceInterval,
		/** Format: date-time */
		public string $Start,
		public bool $NoEndDate,
		public ?MonthlyRecurrenceView $MonthlyRecurrence = null,
		public ?YearlyRecurrenceView $YearlyRecurrence = null,
		public ?QuarterlyRecurrenceView $QuarterlyRecurrence = null,
		/** Format: date-time */
		public ?string $End = null,
	) {
	}
}
