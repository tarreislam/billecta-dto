<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class SelfInvoicePaymentView extends Data
{
	public function __construct(
		public ?string $ActionPublicId = null,
		/** Format: date-time */
		public ?string $PaymentDate = null,
		public ?AmountView $Amount = null,
		/**
		 * 0: BankGiro
		 * 1: PlusGiro
		 * 2: BankAccount
		 * 3: IBAN
		 * -1: Unknown
		 * @var string|int|null
		 */
		public string|int|null $OutgoingPaymentMethodType = null,
		public ?string $OutgoingPaymentAccountNo = null,
	) {
	}
}
