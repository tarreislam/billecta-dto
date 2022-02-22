<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class InvoiceActionStateView extends DataTransferObject
{
	public InvoiceActionStageTypeView $Stage;

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
