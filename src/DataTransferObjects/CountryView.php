<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class CountryView extends Data
{
	public function __construct(
		public ?string $CountryCode = null,
		public ?string $SwedishCountryName = null,
		public ?string $EnglishCountryName = null,
		public ?string $PhoneCode = null,
	) {
	}
}
