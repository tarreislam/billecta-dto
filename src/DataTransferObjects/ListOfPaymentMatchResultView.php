<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ListOfPaymentMatchResultView extends DataTransferObject
{
	/** @var PaymentMatchResultView[] */
	public array $items;
}
