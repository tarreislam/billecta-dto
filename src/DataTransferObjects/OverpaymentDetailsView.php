<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class OverpaymentDetailsView extends DataTransferObject
{
	/**
	 * 0: DebtCollectionAction
	 * 1: InstallmentPlanAction
	 * 2: InvoiceAction
	 * 3: CreditInvoiceAction
	 * 5: ContractInvoiceAction
	 * 6: SelfInvoiceAction
	 * 7: VerificationInvoiceAction
	 * 8: DebentureAction
	 * 9: InterestInvoiceAction
	 * 10: SupplierInvoiceAction
	 * 11: ReconciliationInvoiceAction
	 * 12: OrderAction
	 * 13: OrderInvoiceAction
	 * 14: PaymentAdviceAction
	 * -1: Unknown
	 * @var string|int
	 */
	public $ActionType;
	public ?string $ActionPublicId = null;
	public ?string $InvoiceNumber = null;
	public ?string $UsedOnActionPublicId = null;
}
