<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class RecurrenceIntervalTypeView extends DataTransferObject
{
	/**
	 * 0: Monthly
	 * 1: Yearly
	 * 2: Quarterly
	 * -1: Unknown
	 */
	public int $value;
}
