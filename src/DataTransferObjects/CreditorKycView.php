<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CreditorKycView extends DataTransferObject
{
	/** Format: guid */
	public string $CreditorPublicId;
	public ?CreditorKycFormView $CreditorKycForm = null;
	public CreditorKycStateTypeView $State;
	public ?string $SignedByName = null;
	public ?string $SignedBySSN = null;

	/** Format: date-time */
	public ?string $SignedDate = null;

	/** Format: guid */
	public ?string $MobileBankIdTokenUsedForSign = null;
}
