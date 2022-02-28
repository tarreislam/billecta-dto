<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class BankIdSignStatusView extends DataTransferObject
{
	/**
	 * 0: OutstandingTransaction
	 * 1: NoClient
	 * 2: Started
	 * 3: UserSign
	 * 4: UserReq
	 * 5: Complete
	 * 6: Error
	 * @var string|int
	 */
	public $Status;
	public ?string $SSN = null;
	public ?string $ReferenceToken = null;
	public ?string $AutoStartToken = null;
	public ?string $GivenName = null;
	public ?string $Surname = null;
	public ?string $IpAddress = null;
	public ?string $Name = null;
	public ?string $QR = null;

	/** Format: date-time */
	public ?string $NotAfter = null;

	/** Format: date-time */
	public ?string $NotBefore = null;
	public ?string $OcspResponse = null;
	public ?string $Signature = null;

	/** Format: date-time */
	public string $Created;

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
	 * @var string|int|null
	 */
	public $HintCode = null;
}
