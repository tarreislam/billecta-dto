<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class FileView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $FilePublicId,
		public ?string $ContentType = null,
		/** Format: byte */
		public ?string $Data = null,
		public ?string $FileName = null,
	) {
	}
}
