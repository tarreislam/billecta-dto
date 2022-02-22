<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class IncomingPaymentNotificationMethodTypeView extends DataTransferObject
{
	/**
	 * 0: Email
	 * 1: SMS
	 * -1: Unknown
	 */
	public int $value;
}
