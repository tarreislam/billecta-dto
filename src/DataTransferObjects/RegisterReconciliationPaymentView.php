<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class RegisterReconciliationPaymentView extends Data
{
	public function __construct(
		/** Format: date-time */
		public string $Date,
		public float $WriteOffVat,
		public bool $AmountIsCredit,
		public ?string $ActionPublicId = null,
		public ?AmountView $Amount = null,
		public ?AmountView $WriteOff = null,
		public ?string $Comment = null,
		public ?string $PaymentMeanCode = null,
	) {
	}
}
