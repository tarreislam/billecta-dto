<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ListOfPaymentMatchView extends Data
{
	/** @var PaymentMatchView[] */
	public array $items;


	public function __construct()
	{
	}
}
