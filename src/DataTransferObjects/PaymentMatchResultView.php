<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class PaymentMatchResultView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $UnhandledPaymentPublicId,
		public bool $Successfull,
		public ?string $ResponseMessage = null,
	) {
	}
}
