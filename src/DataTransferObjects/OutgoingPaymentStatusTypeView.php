<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class OutgoingPaymentStatusTypeView extends DataTransferObject
{
	/**
	 * 0: Queued
	 * 1: Processing
	 * 2: Succeded
	 * 3: Failed
	 * 4: Aborted
	 * -1: Unknown
	 */
	public int $value;
}
