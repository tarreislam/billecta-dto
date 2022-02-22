<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CreditorKycView extends DataTransferObject
{
	/** Format: guid */
	public string $CreditorPublicId;
	public ?CreditorKycFormView $CreditorKycForm = null;

	/**
	 * 0: Pending
	 * 1: Approved
	 * 2: Rejected
	 * -1: Unknown
	 */
	public int $State;
	public ?string $SignedByName = null;
	public ?string $SignedBySSN = null;

	/** Format: date-time */
	public ?string $SignedDate = null;

	/** Format: guid */
	public ?string $MobileBankIdTokenUsedForSign = null;
}
