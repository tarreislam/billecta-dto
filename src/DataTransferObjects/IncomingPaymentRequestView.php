<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class IncomingPaymentRequestView extends DataTransferObject
{
	/** Format: guid */
	public string $CreditorPublicId;

	/** Format: date-time */
	public string $From;

	/** Format: date-time */
	public string $To;
	public ?array $PaymentMeanCodeFilter = null;
	public ?array $ProjectNumberFilter = null;
	public ?array $ActionPublicIdFilter = null;
}
