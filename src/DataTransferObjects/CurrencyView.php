<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CurrencyView extends DataTransferObject
{
	/** Format: int32 */
	public int $Decimals;
	public ?string $CurrencyCode = null;
	public ?string $Iso4217 = null;
	public ?string $Description = null;

	/** Format: int64 */
	public int $OneUnit;
}
