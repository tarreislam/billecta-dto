<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class SwishPaymentStatusView extends DataTransferObject
{
	public ?string $PaymentRequestToken = null;

	/**
	 * 0: Created
	 * 1: Declined
	 * 2: Error
	 * 3: Paid
	 * 4: Cancelled
	 * 5: Refunded
	 * -1: Unknown
	 */
	public int $Status;

	/** Format: date-time */
	public ?string $PaidDate = null;

	/** Format: date-time */
	public string $Created;
	public ?AmountView $Amount = null;
	public ?AmountView $RefundedAmount = null;
	public ?string $ErrorMessage = null;
	public ?string $ErrorCode = null;
}
