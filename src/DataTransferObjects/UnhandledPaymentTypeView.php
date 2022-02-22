<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class UnhandledPaymentTypeView extends DataTransferObject
{
	/**
	 * 0: UnmatchedPayment
	 * 1: OverPayment
	 * 2: ManualBalance
	 * 3: BalanceFromInvoice
	 */
	public int $value;
}
