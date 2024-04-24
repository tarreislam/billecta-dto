<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class DebtorBalanceView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $DebtorPublicId,
		/** Format: date-time */
		public string $TransactionDate,
		/**
		 * 0: OpeningBalance
		 * 10: Invoice
		 * 11: SelfInvoice
		 * 20: OverPayment
		 * 21: BalanceFromInvoice
		 * 22: ManualBalance
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $BalanceType,
		public ?AmountView $Amount = null,
		public ?string $Description = null,
	) {
	}
}
