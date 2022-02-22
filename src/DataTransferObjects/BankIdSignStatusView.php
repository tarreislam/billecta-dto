<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class BankIdSignStatusView extends DataTransferObject
{
	public BankIdStatusTypeView $Status;
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
	public ?BankIdHintCodeTypeView $HintCode = null;
}
