<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ContractInvoicePeriodRuleTypeView extends DataTransferObject
{
	/**
	 * 0: None
	 * 1: Previous
	 * 2: Current
	 * 3: Next
	 * -1: Unknown
	 */
	public int $value;
}
