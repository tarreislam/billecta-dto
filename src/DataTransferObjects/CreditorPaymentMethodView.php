<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CreditorPaymentMethodView extends DataTransferObject
{
	/**
	 * 0: Primary
	 * 1: Alternative
	 * -1: Unknown
	 */
	public int $Priority;

	/**
	 * 0: BankGiro
	 * 1: PlusGiro
	 * 2: BankAccount
	 * 3: IBAN
	 * -1: Unknown
	 */
	public int $PaymentMethod;
	public ?string $BankgiroNo = null;
	public ?string $PlusgiroNo = null;
	public ?string $ClearingNo = null;
	public ?string $AccountNo = null;
	public ?string $IBAN = null;
	public ?string $BIC = null;
	public bool $Verified;
}
