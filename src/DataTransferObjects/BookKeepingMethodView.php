<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class BookKeepingMethodView extends DataTransferObject
{
	/**
	 * 0: InvoiceMethod
	 * 1: CashMethod
	 * -1: Unknown
	 */
	public int $value;
}
