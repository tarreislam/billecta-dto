<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ListOfDebtorBalanceView extends DataTransferObject
{
	/** @var DebtorBalanceView[] */
	public array $items;
}
