<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class DebtorBalanceView extends DataTransferObject
{
	/** Format: guid */
	public string $DebtorPublicId;

	/** Format: date-time */
	public string $TransactionDate;
	public ?AmountView $Amount = null;

	/**
	 * 0: OpeningBalance
	 * 10: Invoice
	 * 11: SelfInvoice
	 * 20: OverPayment
	 * 21: BalanceFromInvoice
	 * 22: ManualBalance
	 * -1: Unknown
	 */
	public int $BalanceType;
	public ?string $Description = null;
}
