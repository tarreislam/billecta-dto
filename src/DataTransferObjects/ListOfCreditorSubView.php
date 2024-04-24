<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ListOfCreditorSubView extends Data
{
	/** @var CreditorSubView[] */
	public array $items;


	public function __construct()
	{
	}
}
