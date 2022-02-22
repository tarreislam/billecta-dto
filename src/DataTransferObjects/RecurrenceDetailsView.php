<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class RecurrenceDetailsView extends DataTransferObject
{
	public RecurrenceIntervalTypeView $RecurrenceInterval;
	public ?MonthlyRecurrenceView $MonthlyRecurrence = null;
	public ?YearlyRecurrenceView $YearlyRecurrence = null;
	public ?QuarterlyRecurrenceView $QuarterlyRecurrence = null;

	/** Format: date-time */
	public string $Start;
	public bool $NoEndDate;

	/** Format: date-time */
	public ?string $End = null;
}
