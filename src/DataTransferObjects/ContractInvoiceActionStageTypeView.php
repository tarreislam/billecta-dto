<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ContractInvoiceActionStageTypeView extends DataTransferObject
{
	/**
	 * 0: None
	 * 1: Created
	 * 17: InvoiceCreated
	 * -1: Unknown
	 */
	public int $value;
}
