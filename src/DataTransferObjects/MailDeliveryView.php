<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class MailDeliveryView extends DataTransferObject
{
	/** Format: guid */
	public string $CreditorPublicId;
	public ?FileView $File = null;
	public ?array $Appendixes = null;
	public ?bool $SendAsPriorityMail = null;
	public ?bool $SendWithColor = null;
	public ?bool $IsSimplex = null;
}
