<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class AmountView extends DataTransferObject
{
	public ?string $CurrencyCode = null;

	/** Format: int64 */
	public int $Value;
	public float $ValueForView;
}
