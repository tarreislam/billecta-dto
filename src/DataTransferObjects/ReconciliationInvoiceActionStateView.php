<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ReconciliationInvoiceActionStateView extends Data
{
	public function __construct(
		/**
		 * 0: None
		 * 1: Created
		 * 6: Completed
		 * 12: InvoiceSent
		 * 16: SentToDebtCollection
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $Stage,
		public bool $IsPayed,
		public bool $InvoiceWasIncludedInEmail,
		/** Format: date-time */
		public ?string $ClosedDate = null,
		/** Format: date-time */
		public ?string $InvoiceSentDate = null,
		/** Format: guid */
		public ?string $CreditCardPaymentPublicId = null,
		public ?string $SwishPaymentPublicId = null,
	) {
	}
}
