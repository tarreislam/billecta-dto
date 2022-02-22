<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class AutogiroCompatibleTypeView extends DataTransferObject
{
	/**
	 * 0: Approved
	 * 1: Unapproved
	 * 2: Unknown
	 */
	public int $value;
}
