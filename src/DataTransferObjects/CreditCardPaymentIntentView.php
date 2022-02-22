<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CreditCardPaymentIntentView extends DataTransferObject
{
	public ?string $ActionPublicId = null;
	public ?string $SuccessUrl = null;
	public ?string $FailureUrl = null;
	public LanguageTypeView $Language;
}
