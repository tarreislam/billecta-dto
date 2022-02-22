<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class RegisterPaymentOverShootingAmountHandlingTypeView extends DataTransferObject
{
	/**
	 * 0: None
	 * 1: AsCurrencyDifference
	 * 2: AsOverPayments
	 * -1: Unknown
	 */
	public int $value;
}
