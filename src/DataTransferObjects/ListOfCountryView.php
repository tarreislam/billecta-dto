<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ListOfCountryView extends Data
{
	/** @var CountryView[] */
	public array $items;


	public function __construct()
	{
	}
}
