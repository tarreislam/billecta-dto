<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class SearchResultView extends DataTransferObject
{
	public ?array $InvoiceActions = null;
	public ?array $ReconciliationInvoiceActions = null;
	public ?array $SelfInvoiceActions = null;
	public ?array $DebtCollectionActions = null;
	public ?array $InstallmentPlanActions = null;
	public ?array $ContractInvoiceActions = null;
	public ?array $SupplierInvoiceActions = null;
}
