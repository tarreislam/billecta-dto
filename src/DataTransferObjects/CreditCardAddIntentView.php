<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CreditCardAddIntentView extends DataTransferObject
{
	/** Format: guid */
	public string $DebtorPublicId;
	public ?string $SuccessUrl = null;
	public ?string $FailureUrl = null;
	public LanguageTypeView $Language;
}
