<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class AutogiroWithdrawalView extends Data
{
	public function __construct(
		public bool $AutogiroWithdrawalEnabled,
	) {
	}
}
