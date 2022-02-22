<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ReferenceTypeView extends DataTransferObject
{
	/**
	 * 0: None
	 * 1: OCR
	 * 2: Message
	 */
	public int $value;
}
