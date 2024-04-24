<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class DebtorSelfInvoiceInfoView extends Data
{
	public function __construct(
		/**
		 * 0: BankGiro
		 * 1: PlusGiro
		 * 2: BankAccount
		 * 3: IBAN
		 * 4: Fedwire
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $PaymentMethod,
		public bool $ApprovedCompanyTax,
		public ?string $NextSelfInvoiceNumber = null,
		public ?string $BankgiroNo = null,
		public ?string $PlusgiroNo = null,
		public ?string $AccountNo = null,
		public ?string $ClearingNo = null,
		public ?string $IBAN = null,
		public ?string $BIC = null,
		public ?string $FedwireAccountNumber = null,
		public ?string $RoutingNumber = null,
	) {
	}
}
