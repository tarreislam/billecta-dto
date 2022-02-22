<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CreditorForeignAccountView extends DataTransferObject
{
	public ?string $CurrencyCode = null;
	public ?string $BankName = null;
	public ?string $Iban = null;
	public ?string $Bic = null;
}
