<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class RotRutSearchFilterTypeView extends DataTransferObject
{
	/**
	 * 0: NoFilter
	 * 1: ROT
	 * 2: RUT
	 */
	public int $value;
}
