<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CreditCardAddView extends DataTransferObject
{
	/** Format: guid */
	public string $PublicId;

	/** Format: guid */
	public string $CreditorPublicId;

	/** Format: guid */
	public string $DebtorPublicId;

	/**
	 * 0: Pending
	 * 1: Succeeded
	 * 2: Failed
	 * -1: Unknown
	 * @var string|int
	 */
	public $Status;
	public ?string $AddWindowUrl = null;
	public ?string $SuccessUrl = null;
	public ?string $FailureUrl = null;

	/** Format: date-time */
	public string $Created;

	/**
	 * 0: SV
	 * 1: EN
	 * 2: FI
	 * @var string|int
	 */
	public $Language;
}
