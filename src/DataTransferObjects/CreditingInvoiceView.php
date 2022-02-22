<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CreditingInvoiceView extends DataTransferObject
{
	public ?string $SourcePublicId = null;
	public ?string $SourceInvoiceId = null;
}
