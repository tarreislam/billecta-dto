<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CreditorKycStateTypeView extends DataTransferObject
{
	/**
	 * 0: Pending
	 * 1: Approved
	 * 2: Rejected
	 * -1: Unknown
	 */
	public int $value;
}
