<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class SieKPTYPTypeView extends DataTransferObject
{
	/**
	 * 0: BAS95
	 * 1: BAS96
	 * 2: EUBAS97
	 * 3: NE2007
	 * -1: Unknown
	 */
	public int $value;
}
