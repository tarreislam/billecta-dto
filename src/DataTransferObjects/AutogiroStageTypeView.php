<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class AutogiroStageTypeView extends DataTransferObject
{
	/**
	 * 0: Pending
	 * 1: Approved
	 * 2: Failed
	 * 3: Removed
	 * 100: Migration
	 */
	public int $value;
}
