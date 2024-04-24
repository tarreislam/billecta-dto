<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ListOfDebtorBalanceView extends Data
{
	/** @var DebtorBalanceView[] */
	public array $items;


	public function __construct()
	{
	}
}
