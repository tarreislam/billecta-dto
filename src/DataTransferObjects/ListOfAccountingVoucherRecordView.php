<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ListOfAccountingVoucherRecordView extends DataTransferObject
{
	/** @var AccountingVoucherRecordView[] */
	public array $items;
}
