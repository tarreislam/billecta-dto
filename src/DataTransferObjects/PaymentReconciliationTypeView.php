<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class PaymentReconciliationTypeView extends DataTransferObject
{
	/**
	 * 0: BankGiro
	 * 1: CAMT
	 */
	public int $value;
}
