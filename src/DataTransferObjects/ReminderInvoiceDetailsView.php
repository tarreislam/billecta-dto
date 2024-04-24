<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ReminderInvoiceDetailsView extends Data
{
	public function __construct(
		public bool $SendReminderInvoice,
		/** Format: int32 */
		public int $DaysDelayAfterDueDate,
	) {
	}
}
