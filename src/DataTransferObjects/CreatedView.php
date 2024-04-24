<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class CreatedView extends Data
{
	public function __construct(
		public ?string $PublicId = null,
	) {
	}
}
