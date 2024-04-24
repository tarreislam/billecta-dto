<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class AccountingVoucherTransactionView extends Data
{
	public function __construct(
		public ?AmountView $DebetAmount = null,
		public ?AmountView $CreditAmount = null,
		public ?string $Account = null,
		public ?string $CostCenter = null,
		public ?string $Project = null,
	) {
	}
}
