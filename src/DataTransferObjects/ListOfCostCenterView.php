<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ListOfCostCenterView extends DataTransferObject
{
	/** @var CostCenterView[] */
	public array $items;
}
