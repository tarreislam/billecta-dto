<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ReminderInvoiceActionView extends Data
{
	public function __construct(
		/** Format: date-time */
		public string $Created,
		/**
		 * 0: None
		 * 1: Created
		 * 2: ReminderInvoiceSent
		 * 5: Manual
		 * 6: Completed
		 * 7: Cancelled
		 * 12: InvoiceSent
		 * 13: Attested
		 * 16: SentToDebtCollection
		 * 20: SalesRequested
		 * 21: SaleRequestAccepted
		 * 22: SalesRequestedCancelled
		 * 23: SalesRequestedDenied
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $Stage,
		public ?string $ActionPublicId = null,
		public ?string $SourceActionPublicId = null,
		/** Format: date-time */
		public ?string $ClosedDate = null,
		public ?array $ReminderInvoices = null,
		public ?AmountView $CurrentValue = null,
		public ?AmountView $ReminderFee = null,
	) {
	}
}
