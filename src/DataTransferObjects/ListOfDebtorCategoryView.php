<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ListOfDebtorCategoryView extends Data
{
	/** @var DebtorCategoryView[] */
	public array $items;


	public function __construct()
	{
	}
}
