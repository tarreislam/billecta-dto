<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ListOfProjectView extends Data
{
	/** @var ProjectView[] */
	public array $items;


	public function __construct()
	{
	}
}
