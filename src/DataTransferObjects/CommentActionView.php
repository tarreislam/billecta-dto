<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class CommentActionView extends Data
{
	public function __construct(
		/**
		 * 0: Private
		 * 1: ToDebtor
		 * 2: ToBillecta
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $Target,
		public ?string $ActionPublicId = null,
		public ?string $Comment = null,
		public ?FileView $Attachment = null,
	) {
	}
}
