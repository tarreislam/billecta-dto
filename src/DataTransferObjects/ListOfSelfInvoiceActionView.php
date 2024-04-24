<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ListOfSelfInvoiceActionView extends Data
{
	/** @var SelfInvoiceActionView[] */
	public array $items;


	public function __construct()
	{
	}
}
