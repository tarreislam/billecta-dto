<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class StreamView extends DataTransferObject
{
	/** Format: byte */
	public ?string $Data = null;
}
