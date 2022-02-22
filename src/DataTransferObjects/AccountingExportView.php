<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class AccountingExportView extends DataTransferObject
{
	/** Format: guid */
	public string $CreditorPublicId;

	/** Format: date-time */
	public string $Start;

	/** Format: date-time */
	public string $End;

	/** Format: date-time */
	public ?string $Created = null;
	public ?string $CreatedBy = null;
	public AccountingExportFormatTypeView $Format;
	public AccountingExportDateSelectionTypeView $DateSelectionType;
	public ?FileView $File = null;
}
