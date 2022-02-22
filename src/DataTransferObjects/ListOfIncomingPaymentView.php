<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ListOfIncomingPaymentView extends DataTransferObject
{
	/** @var IncomingPaymentView[] */
	public array $items;
}
