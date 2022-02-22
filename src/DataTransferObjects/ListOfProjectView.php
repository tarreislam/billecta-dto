<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ListOfProjectView extends DataTransferObject
{
	/** @var ProjectView[] */
	public array $items;
}
