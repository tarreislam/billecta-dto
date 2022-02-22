<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class BankAccountStatusTypeView extends DataTransferObject
{
	/**
	 * 0: Waiting
	 * 1: Success
	 * 2: Failed
	 * -1: Unknown
	 */
	public int $value;
}
