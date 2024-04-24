<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ListOfOutgoingPaymentStatusView extends Data
{
	/** @var OutgoingPaymentStatusView[] */
	public array $items;


	public function __construct()
	{
	}
}
