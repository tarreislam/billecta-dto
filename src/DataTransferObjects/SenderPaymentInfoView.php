<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class SenderPaymentInfoView extends Data
{
	public function __construct(
		/**
		 * 0: BankGiro
		 * 1: PlusGiro
		 * 2: BankAccount
		 * 3: IBAN
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $SenderPaymentMethod,
		public ?string $SenderBankgiro = null,
		public ?string $SenderIban = null,
		public ?string $SenderPlusgiro = null,
	) {
	}
}
