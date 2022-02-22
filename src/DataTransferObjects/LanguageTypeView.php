<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class LanguageTypeView extends DataTransferObject
{
	/**
	 * 0: SV
	 * 1: EN
	 * 2: FI
	 */
	public int $value;
}
