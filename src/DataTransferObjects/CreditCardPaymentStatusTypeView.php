<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CreditCardPaymentStatusTypeView extends DataTransferObject
{
	/**
	 * 0: Pending
	 * 1: Succeeded
	 * 2: Failed
	 * 3: Refunded
	 * -1: Unknown
	 */
	public int $value;
}
