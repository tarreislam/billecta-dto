<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class CardRefundPaymentView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $PaymentPublicId,
		public ?AmountView $Amount = null,
	) {
	}
}
