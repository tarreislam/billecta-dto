<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class RegisterSelfInvoiceExternalPaymentView extends Data
{
	public function __construct(
		/** Format: date-time */
		public string $Date,
		public ?string $ActionPublicId = null,
		public ?AmountView $Amount = null,
		public ?string $Comment = null,
		public ?string $PaymentMeanCode = null,
	) {
	}
}
