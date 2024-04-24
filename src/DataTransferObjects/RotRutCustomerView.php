<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class RotRutCustomerView extends Data
{
	public function __construct(
		public ?string $Name = null,
		public ?string $SSN = null,
		public ?AmountView $AskedAmount = null,
	) {
	}
}
