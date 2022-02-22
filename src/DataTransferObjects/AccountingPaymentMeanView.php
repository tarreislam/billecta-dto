<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class AccountingPaymentMeanView extends DataTransferObject
{
	/** Format: guid */
	public string $CreditorPublicId;
	public ?string $PaymentCode = null;
	public ?string $Description = null;
	public ?string $BookkeepingAccount = null;
}
