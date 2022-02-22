<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class DebtorCreditCardView extends DataTransferObject
{
	/** Format: guid */
	public string $CreditCardPublicId;

	/** Format: date-time */
	public string $Created;

	/** Format: date-time */
	public string $Expires;
	public ?string $MaskedCardNumber = null;
	public ?string $Brand = null;
}
