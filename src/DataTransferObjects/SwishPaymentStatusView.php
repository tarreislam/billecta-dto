<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class SwishPaymentStatusView extends Data
{
	public function __construct(
		/**
		 * 0: Created
		 * 1: Declined
		 * 2: Error
		 * 3: Paid
		 * 4: Cancelled
		 * 5: Refunded
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $Status,
		/** Format: date-time */
		public string $Created,
		public ?string $PaymentRequestToken = null,
		/** Format: date-time */
		public ?string $PaidDate = null,
		public ?AmountView $Amount = null,
		public ?AmountView $RefundedAmount = null,
		public ?string $ErrorMessage = null,
		public ?string $ErrorCode = null,
	) {
	}
}
