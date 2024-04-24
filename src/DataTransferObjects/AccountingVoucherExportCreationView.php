<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class AccountingVoucherExportCreationView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $CreditorPublicId,
		/** Format: date-time */
		public string $From,
		/** Format: date-time */
		public string $To,
		/**
		 * 0: EventDate
		 * 1: TransactionDate
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $DateSelectionType,
		public ?array $BookKeepingTypesFilter = null,
	) {
	}
}
