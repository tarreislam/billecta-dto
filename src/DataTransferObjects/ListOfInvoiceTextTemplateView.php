<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ListOfInvoiceTextTemplateView extends Data
{
	/** @var InvoiceTextTemplateView[] */
	public array $items;


	public function __construct()
	{
	}
}
