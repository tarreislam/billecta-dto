<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class DeliveryStatusTypeView extends DataTransferObject
{
	/**
	 * 0: Unknown
	 * 1: Received
	 * 2: Opened
	 * 3: Viewed
	 */
	public int $value;
}
