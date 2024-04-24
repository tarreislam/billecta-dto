<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class PaymentOverrideView extends Data
{
	public function __construct(
		/**
		 * 0: None
		 * 1: OCR
		 * 2: Message
		 * @var string|int
		 */
		public string|int $ReferenceType,
		/**
		 * 0: BankGiro
		 * 1: PlusGiro
		 * 2: BankAccount
		 * 3: IBAN
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $ReceivingAccountType,
		public ?string $BankGiro = null,
		public ?string $PlusGiro = null,
		public ?string $ClearingNo = null,
		public ?string $AccountNo = null,
		public ?string $Iban = null,
		public ?string $Bic = null,
		public ?string $BankName = null,
		public ?string $PaymentReceiver = null,
		public ?string $Reference = null,
	) {
	}
}
