<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ReminderInvoiceActionSubView extends DataTransferObject
{
	public ?string $ActionPublicId = null;
	public ?string $SourceActionPublicId = null;
	public ?AmountView $CurrentFeeAmount = null;
	public ?AmountView $SourceCurrentAmount = null;
	public ?AmountView $SourceOriginalAmount = null;

	/** Format: date-time */
	public string $LastReminderDate;

	/** Format: date-time */
	public string $LastReminderDueDate;
}
