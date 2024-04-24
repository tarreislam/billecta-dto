<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ListOfIncomingPaymentView extends Data
{
	/** @var IncomingPaymentView[] */
	public array $items;


	public function __construct()
	{
	}
}
