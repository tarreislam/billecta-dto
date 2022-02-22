<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class SwishRefundPaymentView extends DataTransferObject
{
	public ?string $PaymentPublicId = null;
	public ?AmountView $Amount = null;
}
