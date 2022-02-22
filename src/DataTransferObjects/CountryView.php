<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CountryView extends DataTransferObject
{
	public ?string $CountryCode = null;
	public ?string $SwedishCountryName = null;
	public ?string $EnglishCountryName = null;
	public ?string $PhoneCode = null;
}
