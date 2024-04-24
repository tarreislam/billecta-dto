<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ListOfDebtorEventView extends Data
{
	/** @var DebtorEventView[] */
	public array $items;


	public function __construct()
	{
	}
}
