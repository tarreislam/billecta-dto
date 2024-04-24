<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ListOfCostCenterView extends Data
{
	/** @var CostCenterView[] */
	public array $items;


	public function __construct()
	{
	}
}
