<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class OutgoingPaymentStatusView extends DataTransferObject
{
	/** Format: guid */
	public string $PaymentPublicId;

	/** Format: guid */
	public string $CreditorPublicId;
	public ?string $SendingBankgiroNo = null;
	public ?string $ReceivingBankgiroNo = null;
	public ?string $ReceivingPlusgiroNo = null;
	public ?string $ReceivingClearingNo = null;
	public ?string $ReceivingAccountNo = null;
	public ?string $ReceiverName = null;
	public ?AmountView $Amount = null;
	public bool $IsSalaryPayment;

	/** Format: date-time */
	public string $PaymentDate;

	/** Format: date-time */
	public ?string $VerificationDate = null;

	/**
	 * 0: Queued
	 * 1: Processing
	 * 2: Succeded
	 * 3: Failed
	 * 4: Aborted
	 * -1: Unknown
	 */
	public int $Status;
	public ?string $Reference = null;
	public ?FileView $File = null;
	public ?string $Comment = null;
}
