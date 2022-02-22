<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ContractInvoiceActionStateView extends DataTransferObject
{
	/**
	 * 0: None
	 * 1: Created
	 * 17: InvoiceCreated
	 * -1: Unknown
	 * @var string|int
	 */
	public $Stage;

	/** Format: date-time */
	public ?string $LastRunDate = null;

	/** Format: date-time */
	public ?string $NextRunDate = null;
	public bool $IsPaused;
	public bool $UseDebtorBalance;
	public bool $CanPause;
	public bool $CanResume;
}
