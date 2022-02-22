<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ListOfUnhandledPaymentView extends DataTransferObject
{
	/** @var UnhandledPaymentView[] */
	public array $items;
}
