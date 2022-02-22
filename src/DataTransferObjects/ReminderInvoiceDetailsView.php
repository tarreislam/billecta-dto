<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ReminderInvoiceDetailsView extends DataTransferObject
{
	public bool $SendReminderInvoice;

	/** Format: int32 */
	public int $DaysDelayAfterDueDate;
}
