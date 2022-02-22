<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class UserSubscribedInvoiceView extends DataTransferObject
{
	/** Format: guid */
	public string $UserPublicId;
	public ?string $ActionPublicId = null;
}
