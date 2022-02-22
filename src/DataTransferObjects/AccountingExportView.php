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

	/**
	 * 0: SIE4
	 * 1: CSV
	 * -1: Unknown
	 */
	public int $Format;

	/**
	 * 0: EventDate
	 * 1: TransactionDate
	 * -1: Unknown
	 */
	public int $DateSelectionType;
	public ?FileView $File = null;
}
