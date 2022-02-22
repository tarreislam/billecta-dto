<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class DebtorSelfInvoiceInfoView extends DataTransferObject
{
	public ?string $NextSelfInvoiceNumber = null;
	public DebtorPaymentMethodView $PaymentMethod;
	public ?string $BankgiroNo = null;
	public ?string $PlusgiroNo = null;
	public ?string $AccountNo = null;
	public ?string $ClearingNo = null;
	public ?string $IBAN = null;
	public ?string $BIC = null;
	public bool $ApprovedCompanyTax;
}
