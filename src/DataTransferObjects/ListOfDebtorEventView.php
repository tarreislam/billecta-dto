<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ListOfDebtorEventView extends DataTransferObject
{
	/** @var DebtorEventView[] */
	public array $items;
}
