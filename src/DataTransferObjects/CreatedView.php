<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CreatedView extends DataTransferObject
{
	public ?string $PublicId = null;
}
