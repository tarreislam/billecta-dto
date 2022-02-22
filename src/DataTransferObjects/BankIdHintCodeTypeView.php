<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class BankIdHintCodeTypeView extends DataTransferObject
{
	/**
	 * 0: unknown
	 * 1: outstandingTransaction
	 * 2: noClient
	 * 3: started
	 * 4: userSign
	 * 5: expiredTransaction
	 * 6: certificateErr
	 * 7: userCancel
	 * 8: cancelled
	 * 9: startFailed
	 */
	public int $value;
}
