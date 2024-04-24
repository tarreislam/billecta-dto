<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ListOfUnhandledPaymentView extends Data
{
	/** @var UnhandledPaymentView[] */
	public array $items;


	public function __construct()
	{
	}
}
