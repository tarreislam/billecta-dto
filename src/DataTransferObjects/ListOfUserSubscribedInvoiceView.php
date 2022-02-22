<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ListOfUserSubscribedInvoiceView extends DataTransferObject
{
	/** @var UserSubscribedInvoiceView[] */
	public array $items;
}
