<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class AccountingVoucherTransactionView extends DataTransferObject
{
	public ?AmountView $DebetAmount = null;
	public ?AmountView $CreditAmount = null;
	public ?string $Account = null;
	public ?string $CostCenter = null;
	public ?string $Project = null;
}
