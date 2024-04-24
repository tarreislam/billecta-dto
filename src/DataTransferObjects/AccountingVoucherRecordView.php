<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class AccountingVoucherRecordView extends Data
{
	public function __construct(
		/** Format: date-time */
		public string $TransactionDate,
		public ?string $Description = null,
		public ?string $InvoiceNumber = null,
		public ?array $Transactions = null,
	) {
	}
}
