<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class AccountingExportDateSelectionTypeView extends DataTransferObject
{
	/**
	 * 0: EventDate
	 * 1: TransactionDate
	 * -1: Unknown
	 */
	public int $value;
}
