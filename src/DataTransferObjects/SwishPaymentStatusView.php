<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class SwishPaymentStatusView extends DataTransferObject
{
	public ?string $PaymentRequestToken = null;
	public SwishStatusTypeView $Status;

	/** Format: date-time */
	public ?string $PaidDate = null;

	/** Format: date-time */
	public string $Created;
	public ?AmountView $Amount = null;
	public ?AmountView $RefundedAmount = null;
	public ?string $ErrorMessage = null;
	public ?string $ErrorCode = null;
}
