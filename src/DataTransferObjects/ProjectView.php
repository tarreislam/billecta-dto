<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ProjectView extends DataTransferObject
{
	/** Format: guid */
	public string $CreditorPublicId;
	public ?string $ProjectNumber = null;
	public ?string $Description = null;
	public ?string $ProjectLeader = null;
	public ?string $ContactPerson = null;
	public ?string $Comments = null;

	/** Format: date-time */
	public ?string $StartDate = null;

	/** Format: date-time */
	public ?string $EndDate = null;
	public ProjectStatusTypeView $Status;
}
