<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class MonthlyAutogiroContractInvoiceView extends DataTransferObject
{
	/** Format: guid */
	public string $CreditorPublicId;
	public ?string $Name = null;
	public ?string $Address = null;
	public ?string $Address2 = null;
	public ?string $ZipCode = null;
	public ?string $City = null;
	public ?string $Email = null;
	public ?string $Phone = null;
	public ?string $DebtorExternalId = null;
	public ?string $SSN = null;
	public ?string $ClearingNumber = null;
	public ?string $AccountNumber = null;
	public ?string $Bank = null;
	public float $Amount;

	/** Format: int32 */
	public int $WithdrawalDay;

	/** Format: date-time */
	public ?string $EndDate = null;

	/** Format: date-time */
	public ?string $StartDate = null;
	public bool $EnableAutomaticReminder;
	public bool $EnableAutomaticDebtCollection;
}
