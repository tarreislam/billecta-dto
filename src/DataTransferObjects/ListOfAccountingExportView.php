<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ListOfAccountingExportView extends DataTransferObject
{
	/** @var AccountingExportView[] */
	public array $items;
}
