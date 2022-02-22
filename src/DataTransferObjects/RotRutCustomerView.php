<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class RotRutCustomerView extends DataTransferObject
{
	public ?string $Name = null;
	public ?string $SSN = null;
	public ?AmountView $AskedAmount = null;
}
