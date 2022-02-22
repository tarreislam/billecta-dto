<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ListOfDebtCollectionMessageView extends DataTransferObject
{
	/** @var DebtCollectionMessageView[] */
	public array $items;
}
