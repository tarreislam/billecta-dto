<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CreditorOutgoingBankgiroView extends DataTransferObject
{
	public ?string $BankgiroNo = null;
	public bool $IsActive;
	public bool $BankgiroApproved;
	public ?string $Description = null;
	public ?string $BookkeepingPaymentMeanCode = null;
}
