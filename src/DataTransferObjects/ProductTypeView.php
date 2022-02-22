<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ProductTypeView extends DataTransferObject
{
	/**
	 * 0: Service
	 * 1: Commodity
	 * 2: Package
	 * 3: VAT
	 * -1: Unknown
	 */
	public int $value;
}
