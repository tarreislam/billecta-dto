<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ListOfAccountingPaymentMeanView extends Data
{
	/** @var AccountingPaymentMeanView[] */
	public array $items;


	public function __construct()
	{
	}
}
