<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class DebtorBalanceTypeView extends DataTransferObject
{
	/**
	 * 0: OpeningBalance
	 * 10: Invoice
	 * 11: SelfInvoice
	 * 20: OverPayment
	 * 21: BalanceFromInvoice
	 * 22: ManualBalance
	 * -1: Unknown
	 */
	public int $value;
}
