<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ListOfUserView extends Data
{
	/** @var UserView[] */
	public array $items;


	public function __construct()
	{
	}
}
