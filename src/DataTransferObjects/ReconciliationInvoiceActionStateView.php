<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ReconciliationInvoiceActionStateView extends DataTransferObject
{
	/**
	 * 0: None
	 * 1: Created
	 * 6: Completed
	 * 12: InvoiceSent
	 * 16: SentToDebtCollection
	 * -1: Unknown
	 * @var string|int
	 */
	public $Stage;
	public bool $IsPayed;

	/** Format: date-time */
	public ?string $ClosedDate = null;

	/** Format: date-time */
	public ?string $InvoiceSentDate = null;
	public bool $InvoiceWasIncludedInEmail;

	/** Format: guid */
	public ?string $CreditCardPaymentPublicId = null;
	public ?string $SwishPaymentPublicId = null;
}
