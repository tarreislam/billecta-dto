<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ReverseVATDetailsView extends Data
{
	public function __construct(
		public bool $ReverseVATActivated,
		public ?string $ReceiverVATNumber = null,
	) {
	}
}
