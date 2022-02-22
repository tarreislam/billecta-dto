<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class SelfInvoiceActionStateView extends DataTransferObject
{
	/**
	 * 0: None
	 * 1: Created
	 * 5: Manual
	 * 6: Completed
	 * 7: Cancelled
	 * 12: InvoiceSent
	 * 13: Attested
	 * 18: PaymentSent
	 * 19: PaymentCancelled
	 * -1: Unknown
	 */
	public int $Stage;

	/** Format: date-time */
	public ?string $InvoiceSentDate = null;

	/** Format: date-time */
	public ?string $NextEventDate = null;

	/** Format: date-time */
	public ?string $ClosedDate = null;
	public ?string $NextEvent = null;
	public bool $IsPaused;

	/** Format: date-time */
	public ?string $AttestedDate = null;

	/** Format: date-time */
	public ?string $PaidDate = null;

	/** Format: date-time */
	public ?string $NextPaymentDate = null;
	public ?AmountView $NextPaymentAmount = null;
}
