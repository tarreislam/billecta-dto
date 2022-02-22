<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class BankIdStatusTypeView extends DataTransferObject
{
	/**
	 * 0: OutstandingTransaction
	 * 1: NoClient
	 * 2: Started
	 * 3: UserSign
	 * 4: UserReq
	 * 5: Complete
	 * 6: Error
	 */
	public int $value;
}
