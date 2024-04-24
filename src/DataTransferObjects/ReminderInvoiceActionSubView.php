<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ReminderInvoiceActionSubView extends Data
{
	public function __construct(
		/** Format: date-time */
		public string $LastReminderDate,
		/** Format: date-time */
		public string $LastReminderDueDate,
		public ?string $ActionPublicId = null,
		public ?string $SourceActionPublicId = null,
		public ?AmountView $CurrentFeeAmount = null,
		public ?AmountView $SourceCurrentAmount = null,
		public ?AmountView $SourceOriginalAmount = null,
	) {
	}
}
