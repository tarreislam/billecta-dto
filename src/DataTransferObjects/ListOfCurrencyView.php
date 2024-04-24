<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ListOfCurrencyView extends Data
{
	/** @var CurrencyView[] */
	public array $items;


	public function __construct()
	{
	}
}
