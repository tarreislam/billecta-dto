<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ListOfDebtorAutogiroApprovalView extends Data
{
	/** @var DebtorAutogiroApprovalView[] */
	public array $items;


	public function __construct()
	{
	}
}
