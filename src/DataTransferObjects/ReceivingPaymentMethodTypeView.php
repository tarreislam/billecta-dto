<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ReceivingPaymentMethodTypeView extends DataTransferObject
{
	/**
	 * 0: BankGiro
	 * 1: PlusGiro
	 * 2: BankAccount
	 * -1: Unknown
	 */
	public int $value;
}
