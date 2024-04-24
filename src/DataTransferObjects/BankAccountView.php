<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class BankAccountView extends Data
{
	public function __construct(
		/**
		 * 0: Approved
		 * 1: Unapproved
		 * 2: Unknown
		 * @var string|int
		 */
		public string|int $AutogiroCompatible,
		public ?string $Number = null,
		public ?string $ClearingNo = null,
		public ?string $AccountNo = null,
		public ?string $Name = null,
		public ?string $Type = null,
		public ?AmountView $Balance = null,
		public ?string $Iban = null,
		public ?string $HolderName = null,
	) {
	}
}
