<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class SelfInvoiceActionStateView extends DataTransferObject
{
	public SelfInvoiceActionStageTypeView $Stage;

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
