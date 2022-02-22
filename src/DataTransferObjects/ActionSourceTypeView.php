<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ActionSourceTypeView extends DataTransferObject
{
	/**
	 * 0: None
	 * 1: DebtCollectionAction
	 * 2: InvoiceAction
	 * 3: ReconciliationInvoiceAction
	 * -1: Unknown
	 */
	public int $value;
}
