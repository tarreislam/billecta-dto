<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class DebtorAutogiroView extends DataTransferObject
{
	public bool $Active;
	public ?string $AccountNo = null;
	public ?string $ClearingNo = null;
	public AutogiroStageTypeView $Stage;
	public ?string $PayerNumber = null;
	public ?string $PaymentServiceSupplier = null;

	/** Format: date-time */
	public ?string $AutogiroFirstWithdrawalDate = null;
}
