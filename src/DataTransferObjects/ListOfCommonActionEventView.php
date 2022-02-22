<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ListOfCommonActionEventView extends DataTransferObject
{
	/** @var CommonActionEventView[] */
	public array $items;
}
