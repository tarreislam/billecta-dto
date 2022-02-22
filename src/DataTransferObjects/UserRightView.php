<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class UserRightView extends DataTransferObject
{
	/** Format: guid */
	public string $CreditorPublicId;
	public bool $CanReadCreditor;
	public bool $IncludeCreditorOnStartPage;
	public bool $CanWriteCreditor;
	public bool $CanAttestInvoice;
	public bool $CanManageInvoicePayments;
	public bool $CanSellInvoice;
	public bool $CanSalesFinance;
	public bool $CanAttestSupplierInvoice;
	public bool $CanPaySupplierInvoice;
	public bool $CanManageInvoices;
	public bool $CanManageDebtCollections;
	public bool $CanManageSelfInvoices;
	public bool $CanManageSelfInvoiceDebtorInfoes;
	public bool $CanManageSupplierInvoices;
	public bool $CanManageFinances;
	public bool $CanReadSettings;
	public bool $CanReadBookkeeping;
}
