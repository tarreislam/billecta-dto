<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ListOfOutgoingPaymentStatusView extends DataTransferObject
{
	/** @var OutgoingPaymentStatusView[] */
	public array $items;
}
