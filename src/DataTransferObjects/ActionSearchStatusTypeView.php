<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ActionSearchStatusTypeView extends DataTransferObject
{
	/**
	 * 0: All
	 * 1: Open
	 * 2: Closed
	 * 3: WithInvoiceReminder
	 * 4: WithoutInvoiceReminder
	 * -1: Unknown
	 */
	public int $value;
}
