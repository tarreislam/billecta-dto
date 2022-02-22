<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class DebtorPaymentMethodView extends DataTransferObject
{
	/**
	 * 0: BankGiro
	 * 1: PlusGiro
	 * 2: BankAccount
	 * 3: IBAN
	 * -1: Unknown
	 */
	public int $value;
}
