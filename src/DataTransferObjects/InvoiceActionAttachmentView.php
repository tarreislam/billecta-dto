<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class InvoiceActionAttachmentView extends Data
{
	public function __construct(
		public bool $IsCoverSheet,
		/** Format: int32 */
		public int $SortNumber,
		public ?FileView $File = null,
	) {
	}
}
