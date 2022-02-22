<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CommentActionView extends DataTransferObject
{
	public ?string $ActionPublicId = null;
	public ?string $Comment = null;
	public ?FileView $Attachment = null;

	/**
	 * 0: Private
	 * 1: ToDebtor
	 * 2: ToBillecta
	 * -1: Unknown
	 */
	public int $Target;
}
