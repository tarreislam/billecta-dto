<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ReconciliationDebtorView extends DataTransferObject
{
	public ?string $DebtorNo = null;
	public ?string $OrgNo = null;
	public ?string $CountryCode = null;
	public ?string $Name = null;
	public ?string $Email = null;
	public ?string $Phone = null;
}
