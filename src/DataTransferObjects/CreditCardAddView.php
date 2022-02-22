<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CreditCardAddView extends DataTransferObject
{
	/** Format: guid */
	public string $PublicId;

	/** Format: guid */
	public string $CreditorPublicId;

	/** Format: guid */
	public string $DebtorPublicId;
	public CreditCardAddStatusTypeView $Status;
	public ?string $AddWindowUrl = null;
	public ?string $SuccessUrl = null;
	public ?string $FailureUrl = null;

	/** Format: date-time */
	public string $Created;
	public LanguageTypeView $Language;
}
