<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CommentActionView extends DataTransferObject
{
	public ?string $ActionPublicId = null;
	public ?string $Comment = null;
	public ?FileView $Attachment = null;
	public CommentTargetTypeView $Target;
}
