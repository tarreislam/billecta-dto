<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CreditorPaymentMethodPriorityTypeView extends DataTransferObject
{
	/**
	 * 0: Primary
	 * 1: Alternative
	 * -1: Unknown
	 */
	public int $value;
}
