<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class SelfInvoiceActionAttachmentView extends DataTransferObject
{
	public ?FileView $File = null;
	public bool $IsCoverSheet;

	/** Format: int32 */
	public int $SortNumber;
}
