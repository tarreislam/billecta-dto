<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ReconciliationInvoiceActionStageTypeView extends DataTransferObject
{
	/**
	 * 0: None
	 * 1: Created
	 * 6: Completed
	 * 12: InvoiceSent
	 * 16: SentToDebtCollection
	 * -1: Unknown
	 */
	public int $value;
}
