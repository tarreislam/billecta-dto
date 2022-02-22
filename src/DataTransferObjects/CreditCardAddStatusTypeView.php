<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CreditCardAddStatusTypeView extends DataTransferObject
{
	/**
	 * 0: Pending
	 * 1: Succeeded
	 * 2: Failed
	 * -1: Unknown
	 */
	public int $value;
}
