<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class CreditActionView extends Data
{
	public function __construct(
		public bool $InvoiceInterest,
		public bool $IsPaymentCreditation,
		public ?string $ActionPublicId = null,
		public ?AmountView $Value = null,
		public ?string $Comment = null,
		public ?string $PaymentMeanCode = null,
		/** Format: date-time */
		public ?string $PaymentDate = null,
	) {
	}
}
