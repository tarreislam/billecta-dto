<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ActionPublicIdsView extends Data
{
	public function __construct(
		public ?array $ActionPublicIds = null,
	) {
	}
}
