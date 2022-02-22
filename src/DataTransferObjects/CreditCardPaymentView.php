<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CreditCardPaymentView extends DataTransferObject
{
	/** Format: guid */
	public string $PaymentPublicId;

	/** Format: guid */
	public string $CreditorPublicId;
	public CreditCardPaymentStatusTypeView $Status;
	public ?AmountView $Amount = null;
	public ?AmountView $RefundedAmount = null;

	/** Format: date-time */
	public string $PaymentDate;
	public ?string $ActionPublicId = null;
	public ActionTypeView $ActionType;
	public ?string $Comment = null;
	public ?string $PaymentWindowUrl = null;
	public ?string $SuccessUrl = null;
	public ?string $FailureUrl = null;

	/** Format: date-time */
	public string $Created;
	public LanguageTypeView $Language;
	public ?string $Funding = null;
	public ?string $Brand = null;
}
