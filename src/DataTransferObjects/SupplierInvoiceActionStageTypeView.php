<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class SupplierInvoiceActionStageTypeView extends DataTransferObject
{
	/**
	 * 0: None
	 * 1: Created
	 * 5: Manual
	 * 6: Completed
	 * 7: Cancelled
	 * 13: Attested
	 * 18: PaymentSent
	 * 19: PaymentCancelled
	 * -1: Unknown
	 */
	public int $value;
}
