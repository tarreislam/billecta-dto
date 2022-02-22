<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class SwishStatusTypeView extends DataTransferObject
{
	/**
	 * 0: Created
	 * 1: Declined
	 * 2: Error
	 * 3: Paid
	 * 4: Cancelled
	 * 5: Refunded
	 * -1: Unknown
	 */
	public int $value;
}
