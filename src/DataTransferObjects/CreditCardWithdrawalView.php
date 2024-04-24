<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class CreditCardWithdrawalView extends Data
{
	public function __construct(
		public bool $CreditCardWithdrawalEnabled,
	) {
	}
}
