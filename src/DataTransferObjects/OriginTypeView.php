<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class OriginTypeView extends DataTransferObject
{
	/**
	 * 0: InternalApi
	 * 3: FortnoxOrder
	 * 4: InternalSystem
	 * 6: Fortnox
	 * 7: PeAccountingInvoice
	 * 10: Kommed
	 */
	public int $value;
}
