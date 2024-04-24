<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ListOfCreditCardPaymentView extends Data
{
	/** @var CreditCardPaymentView[] */
	public array $items;


	public function __construct()
	{
	}
}
