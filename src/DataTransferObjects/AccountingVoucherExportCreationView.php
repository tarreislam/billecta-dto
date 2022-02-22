<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class AccountingVoucherExportCreationView extends DataTransferObject
{
	/** Format: guid */
	public string $CreditorPublicId;

	/** Format: date-time */
	public string $From;

	/** Format: date-time */
	public string $To;
	public ?array $BookKeepingTypesFilter = null;
	public AccountingExportDateSelectionTypeView $DateSelectionType;
}
