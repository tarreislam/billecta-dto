<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ReconciliationInvoiceActionReminderView extends DataTransferObject
{
	public ?FileView $File = null;

	/** Format: date-time */
	public string $Created;
}
