<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ListOfInvoiceActionRotRutProcessedView extends Data
{
	/** @var InvoiceActionRotRutProcessedView[] */
	public array $items;


	public function __construct()
	{
	}
}
