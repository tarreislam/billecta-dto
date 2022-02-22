<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ListOfCreditorSubView extends DataTransferObject
{
	/** @var CreditorSubView[] */
	public array $items;
}
