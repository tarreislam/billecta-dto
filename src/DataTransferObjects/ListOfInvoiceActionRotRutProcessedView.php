<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ListOfInvoiceActionRotRutProcessedView extends DataTransferObject
{
	/** @var InvoiceActionRotRutProcessedView[] */
	public array $items;
}
