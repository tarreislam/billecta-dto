<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ReconciliationInvoiceActionStateView extends DataTransferObject
{
	public ReconciliationInvoiceActionStageTypeView $Stage;
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
