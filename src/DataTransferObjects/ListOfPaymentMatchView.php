<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ListOfPaymentMatchView extends DataTransferObject
{
	/** @var PaymentMatchView[] */
	public array $items;
}
