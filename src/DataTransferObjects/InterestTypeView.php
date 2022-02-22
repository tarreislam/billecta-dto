<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class InterestTypeView extends DataTransferObject
{
	/**
	 * 0: Fixed
	 * 1: AboveEffectiveReference
	 * 2: NoInterest
	 * -1: Unknown
	 */
	public int $value;
}
