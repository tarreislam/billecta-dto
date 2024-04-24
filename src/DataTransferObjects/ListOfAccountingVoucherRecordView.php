<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ListOfAccountingVoucherRecordView extends Data
{
	/** @var AccountingVoucherRecordView[] */
	public array $items;


	public function __construct()
	{
	}
}
