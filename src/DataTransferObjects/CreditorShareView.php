<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CreditorShareView extends DataTransferObject
{
	public ?string $SharedWithUserName = null;

	/** Format: guid */
	public string $SharePublicId;

	/** Format: guid */
	public string $CreditorPublicId;
	public bool $CanAttestInvoice;
	public bool $CanManageInvoicePayments;
	public bool $CanWriteCreditor;
	public bool $CanAttestSupplierInvoice;
	public bool $CanManageSelfInvoiceDebtorInfoes;
	public bool $CanPaySupplierInvoice;
	public bool $CanReadSettings;
	public bool $CanReadBookkeeping;
}
