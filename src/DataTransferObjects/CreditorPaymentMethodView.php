<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class CreditorPaymentMethodView extends Data
{
	public function __construct(
		/**
		 * 0: Primary
		 * 1: Alternative
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $Priority,
		/**
		 * 0: BankGiro
		 * 1: PlusGiro
		 * 2: BankAccount
		 * 3: IBAN
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $PaymentMethod,
		public bool $Verified,
		public ?string $BankgiroNo = null,
		public ?string $PlusgiroNo = null,
		public ?string $ClearingNo = null,
		public ?string $AccountNo = null,
		public ?string $IBAN = null,
		public ?string $BIC = null,
	) {
	}
}
