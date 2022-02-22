<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class UnhandledPaymentView extends DataTransferObject
{
	/** Format: guid */
	public string $CreditorPublicId;

	/** Format: guid */
	public string $UnhandledPaymentPublicId;
	public ?string $CreditorName = null;
	public ?string $SenderName = null;
	public ?string $SenderAddress = null;
	public ?string $SenderZipCode = null;
	public ?string $SenderCity = null;
	public ?string $SenderCountryCode = null;
	public ?string $SenderOrgNo = null;
	public ?string $SenderBankgiroNo = null;
	public ?AmountView $Amount = null;

	/** Format: date-time */
	public string $PaymentDate;
	public ?string $Reference = null;
	public ?string $CreatedBy = null;

	/**
	 * 0: UnmatchedPayment
	 * 1: OverPayment
	 * 2: ManualBalance
	 * 3: BalanceFromInvoice
	 */
	public int $UnhandledPaymentType;
	public ?OverpaymentDetailsView $OverpaymentDetails = null;
	public ?array $AdditionalInformations = null;

	/**
	 * 0: Unhandled
	 * 1: UsedOnInvoice
	 * 2: UsedOnInvoiceInOtherCreditor
	 * 4: Deleted
	 * 5: RepaymentPending
	 * 6: Repaid
	 */
	public int $State;

	/** Format: guid */
	public ?string $DebtorPublicId = null;
}
