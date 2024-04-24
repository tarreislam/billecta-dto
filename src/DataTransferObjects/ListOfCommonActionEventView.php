<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ListOfCommonActionEventView extends Data
{
	/** @var CommonActionEventView[] */
	public array $items;


	public function __construct()
	{
	}
}
