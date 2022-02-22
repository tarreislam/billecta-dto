<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class DebtorTypeView extends DataTransferObject
{
	/**
	 * 0: Private
	 * 1: Company
	 * -1: Undefined
	 */
	public int $value;
}
