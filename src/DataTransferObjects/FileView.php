<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class FileView extends DataTransferObject
{
	/** Format: guid */
	public string $FilePublicId;
	public ?string $ContentType = null;

	/** Format: byte */
	public ?string $Data = null;
	public ?string $FileName = null;
}
