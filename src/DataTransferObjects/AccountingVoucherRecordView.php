<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class AccountingVoucherRecordView extends DataTransferObject
{
	public ?string $Description = null;
	public ?string $InvoiceNumber = null;

	/** Format: date-time */
	public string $TransactionDate;
	public ?array $Transactions = null;
}
