<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ListOfUserSubscribedInvoiceView extends Data
{
	/** @var UserSubscribedInvoiceView[] */
	public array $items;


	public function __construct()
	{
	}
}
