<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class BankAccountView extends DataTransferObject
{
	public ?string $Number = null;
	public ?string $ClearingNo = null;
	public ?string $AccountNo = null;
	public ?string $Name = null;
	public ?string $Type = null;
	public AutogiroCompatibleTypeView $AutogiroCompatible;
	public ?AmountView $Balance = null;
	public ?string $Iban = null;
	public ?string $HolderName = null;
}
