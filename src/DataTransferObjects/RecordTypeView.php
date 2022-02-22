<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class RecordTypeView extends DataTransferObject
{
	/**
	 * 0: Standard
	 * 1: Message
	 * 2: Package
	 * -1: Unknown
	 */
	public int $value;
}
