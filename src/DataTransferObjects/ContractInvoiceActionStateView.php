<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ContractInvoiceActionStateView extends Data
{
	public function __construct(
		/**
		 * 0: None
		 * 1: Created
		 * 17: InvoiceCreated
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $Stage,
		public bool $IsPaused,
		public bool $UseDebtorBalance,
		public bool $CanPause,
		public bool $CanResume,
		/** Format: date-time */
		public ?string $LastRunDate = null,
		/** Format: date-time */
		public ?string $NextRunDate = null,
	) {
	}
}
