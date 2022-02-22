<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class DiscountTypeView extends DataTransferObject
{
	/**
	 * 0: Amount
	 * 1: Percentage
	 * -1: Unknown
	 */
	public int $value;
}
