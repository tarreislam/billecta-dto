<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class CreditorOutgoingBankgiroView extends Data
{
	public function __construct(
		public bool $IsActive,
		public bool $BankgiroApproved,
		public ?string $BankgiroNo = null,
		public ?string $Description = null,
		public ?string $BookkeepingPaymentMeanCode = null,
	) {
	}
}
