<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class BankAccountRequestView extends DataTransferObject
{
	public ?string $PublicId = null;
	public BankAccountBankTypeView $Bank;
	public ?string $SSN = null;
	public ?string $QR = null;
	public BankAccountStatusTypeView $Status;
	public ?array $AccountNumbers = null;
	public ?string $BankIdAutostartToken = null;
	public bool $IsBankIdAutostartTokenRequired;
	public ?string $FailureMessage = null;
	public ?string $FailureCode = null;
}
