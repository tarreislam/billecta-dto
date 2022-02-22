<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class AccountingExportFormatTypeView extends DataTransferObject
{
	/**
	 * 0: SIE4
	 * 1: CSV
	 * -1: Unknown
	 */
	public int $value;
}
