<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class DebtorAutogiroView extends Data
{
	public function __construct(
		public bool $Active,
		/**
		 * 0: Pending
		 * 1: Approved
		 * 2: Failed
		 * 3: Removed
		 * 100: Migration
		 * @var string|int
		 */
		public string|int $Stage,
		public ?string $AccountNo = null,
		public ?string $ClearingNo = null,
		public ?string $PayerNumber = null,
		public ?string $PaymentServiceSupplier = null,
		/** Format: date-time */
		public ?string $AutogiroFirstWithdrawalDate = null,
	) {
	}
}
