<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ListOfCreditCardPaymentView extends DataTransferObject
{
	/** @var CreditCardPaymentView[] */
	public array $items;
}
