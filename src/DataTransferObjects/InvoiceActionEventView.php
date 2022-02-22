<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class InvoiceActionEventView extends DataTransferObject
{
	public ?string $Title = null;
	public ?string $Content = null;

	/** Format: date-time */
	public string $EventDate;
	public ?string $EventBy = null;
	public ?string $Reference = null;
	public EventTypeView $EventType;
	public bool $IsPublic;
	public bool $HasOccured;

	/** Format: guid */
	public string $EventPublicId;
}
