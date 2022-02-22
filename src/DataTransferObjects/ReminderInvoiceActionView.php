<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ReminderInvoiceActionView extends DataTransferObject
{
	public ?string $ActionPublicId = null;
	public ?string $SourceActionPublicId = null;

	/** Format: date-time */
	public string $Created;

	/** Format: date-time */
	public ?string $ClosedDate = null;
	public InvoiceActionStageTypeView $Stage;
	public ?array $ReminderInvoices = null;
	public ?AmountView $CurrentValue = null;
	public ?AmountView $ReminderFee = null;
}
