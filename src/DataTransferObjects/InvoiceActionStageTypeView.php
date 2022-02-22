<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class InvoiceActionStageTypeView extends DataTransferObject
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
	 */
	public int $value;
}
