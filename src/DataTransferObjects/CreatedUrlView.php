<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class CreatedUrlView extends Data
{
	public function __construct(
		public ?string $Url = null,
	) {
	}
}
