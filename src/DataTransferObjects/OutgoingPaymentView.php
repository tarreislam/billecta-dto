<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class OutgoingPaymentView extends DataTransferObject
{
	/** Format: guid */
	public string $CreditorPublicId;
	public ReceivingPaymentMethodTypeView $ReceivingPaymentMethod;
	public ?string $SendingBankgiroNo = null;
	public ?string $ReceivingBankgiroNo = null;
	public ?string $ReceivingPlusgiroNo = null;
	public ?string $ReceivingClearingNo = null;
	public ?string $ReceivingAccountNo = null;
	public ?string $ReceiverName = null;

	/** Format: date-time */
	public ?string $PaymentDate = null;
	public ?AmountView $Amount = null;
	public ?string $Reference = null;
	public bool $IsSalaryPayment;

	/** Format: guid */
	public ?string $BankIdReferenceToken = null;
}
