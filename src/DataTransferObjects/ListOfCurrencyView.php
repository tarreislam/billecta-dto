<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ListOfCurrencyView extends DataTransferObject
{
	/** @var CurrencyView[] */
	public array $items;
}
