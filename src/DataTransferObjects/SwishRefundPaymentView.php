<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class SwishRefundPaymentView extends Data
{
	public function __construct(
		public ?string $PaymentPublicId = null,
		public ?AmountView $Amount = null,
	) {
	}
}
