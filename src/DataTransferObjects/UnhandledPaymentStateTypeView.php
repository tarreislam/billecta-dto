<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class UnhandledPaymentStateTypeView extends DataTransferObject
{
	/**
	 * 0: Unhandled
	 * 1: UsedOnInvoice
	 * 2: UsedOnInvoiceInOtherCreditor
	 * 4: Deleted
	 * 5: RepaymentPending
	 * 6: Repaid
	 */
	public int $value;
}
