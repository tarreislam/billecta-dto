<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ProjectStatusTypeView extends DataTransferObject
{
	/**
	 * 0: NotStarted
	 * 1: Ongoing
	 * 2: Compelted
	 * -1: Unknown
	 */
	public int $value;
}
