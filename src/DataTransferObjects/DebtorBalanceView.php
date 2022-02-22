<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class DebtorBalanceView extends DataTransferObject
{
	/** Format: guid */
	public string $DebtorPublicId;

	/** Format: date-time */
	public string $TransactionDate;
	public ?AmountView $Amount = null;
	public DebtorBalanceTypeView $BalanceType;
	public ?string $Description = null;
}
