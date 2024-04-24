<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ListOfAccountingDimensionView extends Data
{
	/** @var AccountingDimensionView[] */
	public array $items;


	public function __construct()
	{
	}
}
