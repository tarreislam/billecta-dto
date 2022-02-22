<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ContractInvoiceActionSubView extends DataTransferObject
{
	public ?string $ActionPublicId = null;

	/** Format: guid */
	public string $CreditorPublicId;

	/** Format: guid */
	public string $DebtorPublicId;
	public ?string $CostCenter = null;
	public ?string $CreditorOrgNo = null;
	public ?string $CreditorName = null;
	public ?AmountView $Amount = null;

	/** Format: date-time */
	public string $Created;
	public ?string $DebtorOrgNo = null;
	public ?string $DebtorName = null;

	/** Format: date-time */
	public ?string $LastRunDate = null;

	/** Format: date-time */
	public ?string $NextRunDate = null;
	public bool $IsPaused;

	/**
	 * 0: Email
	 * 1: Mail
	 * 2: Manually
	 * 3: SMS
	 * 4: EInvoice
	 * 5: Kivra
	 * -1: Unknown
	 * @var string|int
	 */
	public $DeliveryMethod;

	/**
	 * 0: Monthly
	 * 1: Yearly
	 * 2: Quarterly
	 * -1: Unknown
	 * @var string|int
	 */
	public $RecurrenceInterval;
	public ?string $ContractNumber = null;

	/** Format: date-time */
	public ?string $Start = null;

	/** Format: date-time */
	public ?string $End = null;
	public ?string $OurReference = null;
	public bool $AutogiroWithdrawalEnabled;
}
