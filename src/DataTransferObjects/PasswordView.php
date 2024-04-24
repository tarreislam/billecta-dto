<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class PasswordView extends Data
{
	public function __construct(
		public ?string $Password = null,
	) {
	}
}
