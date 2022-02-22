<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class AccountingSettingsAccountView extends DataTransferObject
{
	public ?string $Account = null;
	public ?float $VAT = null;
	public AccountingSettingsAccountTypeView $AccountType;
}
