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
	public UnhandledPaymentTypeView $UnhandledPaymentType;
	public ?OverpaymentDetailsView $OverpaymentDetails = null;
	public ?array $AdditionalInformations = null;
	public UnhandledPaymentStateTypeView $State;

	/** Format: guid */
	public ?string $DebtorPublicId = null;
}
