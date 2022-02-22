<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ListOfCreditorShareView extends DataTransferObject
{
	/** @var CreditorShareView[] */
	public array $items;
}
