<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CommentTargetTypeView extends DataTransferObject
{
	/**
	 * 0: Private
	 * 1: ToDebtor
	 * 2: ToBillecta
	 * -1: Unknown
	 */
	public int $value;
}
