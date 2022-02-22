<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ListOfInvoiceTextTemplateView extends DataTransferObject
{
	/** @var InvoiceTextTemplateView[] */
	public array $items;
}
