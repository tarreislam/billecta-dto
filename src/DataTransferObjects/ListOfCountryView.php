<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ListOfCountryView extends DataTransferObject
{
	/** @var CountryView[] */
	public array $items;
}
