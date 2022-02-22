<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class SearchView extends DataTransferObject
{
	public ?string $SearchValue = null;
	public ?array $DebtorPublicIds = null;
	public ?array $ProductPublicIds = null;
	public ?array $Status = null;
	public ?array $Types = null;

	/**
	 * 0: NoFilter
	 * 1: ROT
	 * 2: RUT
	 */
	public int $RotRut;

	/** Format: guid */
	public string $CreditorPublicId;

	/** Format: date-time */
	public ?string $InvoiceDateFrom = null;

	/** Format: date-time */
	public ?string $InvoiceDateTo = null;

	/** Format: date-time */
	public ?string $DueDateFrom = null;

	/** Format: date-time */
	public ?string $DueDateTo = null;

	/** Format: date-time */
	public ?string $CreatedDateFrom = null;

	/** Format: date-time */
	public ?string $CreatedDateTo = null;

	/** Format: date-time */
	public ?string $AttestedDateFrom = null;

	/** Format: date-time */
	public ?string $AttestedDateTo = null;

	/** Format: date-time */
	public ?string $ClosedDateFrom = null;

	/** Format: date-time */
	public ?string $ClosedDateTo = null;

	/** Format: date-time */
	public ?string $PeriodDateFrom = null;

	/** Format: date-time */
	public ?string $PeriodDateTo = null;
	public ?string $Project = null;
	public ?string $CostCenter = null;
	public ?string $DebtorName = null;
	public ?string $DebtorExternalId = null;
	public ?string $OrgNo = null;
	public ?string $ProductName = null;
	public ?string $ProductExternalId = null;
	public ?string $ArticleNumber = null;
	public ?bool $SearchOnAllCreditors = null;
}
