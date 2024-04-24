<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ListOfCreditorShareView extends Data
{
	/** @var CreditorShareView[] */
	public array $items;


	public function __construct()
	{
	}
}
