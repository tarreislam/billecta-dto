<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ListOfAccountingPaymentMeanView extends DataTransferObject
{
	/** @var AccountingPaymentMeanView[] */
	public array $items;
}
