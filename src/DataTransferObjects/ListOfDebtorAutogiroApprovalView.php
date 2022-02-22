<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ListOfDebtorAutogiroApprovalView extends DataTransferObject
{
	/** @var DebtorAutogiroApprovalView[] */
	public array $items;
}
