<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ReconciliationInvoiceActionReminderView extends Data
{
	public function __construct(
		/** Format: date-time */
		public string $Created,
		public ?FileView $File = null,
	) {
	}
}
