<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class AccountingExportCreationView extends DataTransferObject
{
	/** Format: guid */
	public string $CreditorPublicId;

	/** Format: date-time */
	public string $From;

	/** Format: date-time */
	public string $To;
	public ?array $BookKeepingTypesFilter = null;

	/**
	 * 0: EventDate
	 * 1: TransactionDate
	 * -1: Unknown
	 * @var string|int
	 */
	public $DateSelectionType;

	/**
	 * 0: SIE4
	 * 1: CSV
	 * -1: Unknown
	 * @var string|int
	 */
	public $Format;
	public bool $SummarizeAccountsByDate;
}
