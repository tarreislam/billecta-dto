<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class DebtorAutogiroView extends DataTransferObject
{
	public bool $Active;
	public ?string $AccountNo = null;
	public ?string $ClearingNo = null;

	/**
	 * 0: Pending
	 * 1: Approved
	 * 2: Failed
	 * 3: Removed
	 * 100: Migration
	 * @var string|int
	 */
	public $Stage;
	public ?string $PayerNumber = null;
	public ?string $PaymentServiceSupplier = null;

	/** Format: date-time */
	public ?string $AutogiroFirstWithdrawalDate = null;
}
