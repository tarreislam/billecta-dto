<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ListOfSelfInvoiceActionView extends DataTransferObject
{
	/** @var SelfInvoiceActionView[] */
	public array $items;
}
