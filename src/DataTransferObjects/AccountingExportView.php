<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class AccountingExportView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $CreditorPublicId,
		/** Format: date-time */
		public string $Start,
		/** Format: date-time */
		public string $End,
		/**
		 * 0: SIE4
		 * 1: CSV
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $Format,
		/**
		 * 0: EventDate
		 * 1: TransactionDate
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $DateSelectionType,
		/** Format: date-time */
		public ?string $Created = null,
		public ?string $CreatedBy = null,
		public ?FileView $File = null,
	) {
	}
}
