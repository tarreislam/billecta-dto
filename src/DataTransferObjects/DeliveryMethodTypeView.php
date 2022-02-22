<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class DeliveryMethodTypeView extends DataTransferObject
{
	/**
	 * 0: Email
	 * 1: Mail
	 * 2: Manually
	 * 3: SMS
	 * 4: EInvoice
	 * 5: Kivra
	 * -1: Unknown
	 */
	public int $value;
}
