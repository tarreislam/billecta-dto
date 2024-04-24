<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class CreditorBankInfoView extends Data
{
	public function __construct(
		public bool $UsesClientFund,
		/**
		 * 0: BankGiro
		 * 1: PlusGiro
		 * 2: BankAccount
		 * 3: IBAN
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $PaymentMethod,
		public ?string $BankgiroNo = null,
		public ?string $PlusgiroNo = null,
		public ?string $AccountNo = null,
		public ?string $ClearingNo = null,
		public ?string $EInvoiceFUI = null,
		public ?string $EInvoiceCUI = null,
		public ?array $ForeignAccounts = null,
		public ?array $CreditorOutgoingBankgiroes = null,
		public ?array $PaymentMethods = null,
	) {
	}
}
