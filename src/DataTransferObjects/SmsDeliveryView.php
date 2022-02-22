<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class SmsDeliveryView extends DataTransferObject
{
	/** Format: guid */
	public string $CreditorPublicId;
	public ?string $ReceiverPhone = null;
	public ?string $Message = null;
	public ?string $CountryCode = null;
}
