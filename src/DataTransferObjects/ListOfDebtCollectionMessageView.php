<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ListOfDebtCollectionMessageView extends Data
{
	/** @var DebtCollectionMessageView[] */
	public array $items;


	public function __construct()
	{
	}
}
