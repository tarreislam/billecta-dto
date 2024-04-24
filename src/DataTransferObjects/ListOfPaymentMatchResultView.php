<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ListOfPaymentMatchResultView extends Data
{
	/** @var PaymentMatchResultView[] */
	public array $items;


	public function __construct()
	{
	}
}
