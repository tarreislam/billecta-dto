<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class InvoiceActionStateView extends DataTransferObject
{
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
	public $Stage;

	/** Format: date-time */
	public ?string $InvoiceSentDate = null;

	/** Format: date-time */
	public ?string $NextEventDate = null;

	/** Format: date-time */
	public ?string $ClosedDate = null;
	public ?string $NextEvent = null;
	public bool $IsPaused;
	public bool $IsLocked;

	/** Format: date-time */
	public ?string $AttestedDate = null;

	/** Format: date-time */
	public ?string $DisputedDate = null;

	/** Format: date-time */
	public ?string $SmsSentDate = null;

	/** Format: date-time */
	public ?string $SentToDebtCollectionDate = null;

	/** Format: date-time */
	public ?string $SalesRequestedDate = null;

	/** Format: guid */
	public ?string $CreditCardPaymentPublicId = null;
	public ?string $SwishPaymentPublicId = null;
	public bool $UseDebtorBalance;
}
