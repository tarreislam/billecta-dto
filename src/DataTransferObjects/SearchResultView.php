<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class SearchResultView extends Data
{
	public function __construct(
		public ?array $InvoiceActions = null,
		public ?array $ReconciliationInvoiceActions = null,
		public ?array $SelfInvoiceActions = null,
		public ?array $DebtCollectionActions = null,
		public ?array $InstallmentPlanActions = null,
		public ?array $ContractInvoiceActions = null,
		public ?array $SupplierInvoiceActions = null,
	) {
	}
}
