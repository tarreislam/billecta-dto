<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CardRefundPaymentView extends DataTransferObject
{
	/** Format: guid */
	public string $PaymentPublicId;
	public ?AmountView $Amount = null;
}
