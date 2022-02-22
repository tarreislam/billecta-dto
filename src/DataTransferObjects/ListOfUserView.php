<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ListOfUserView extends DataTransferObject
{
	/** @var UserView[] */
	public array $items;
}
