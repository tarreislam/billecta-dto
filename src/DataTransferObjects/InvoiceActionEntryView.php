<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class InvoiceActionEntryView extends DataTransferObject
{
	public ActionTypeView $ActionType;

	/** Format: guid */
	public string $CreditorPublicId;

	/** Format: guid */
	public string $DebtorPublicId;

	/** Format: date-time */
	public string $InvoiceDate;

	/** Format: date-time */
	public string $DueDate;

	/** Format: date-time */
	public ?string $DeliveryDate = null;
	public ?array $Records = null;
	public float $InterestPercentage;
	public ?string $ReasonForHigherInterest = null;

	/** Format: int32 */
	public int $InterestStartInDaysAfterDueDate;
	public ?InterestTypeView $InterestType = null;
	public ?string $OurReference = null;
	public ?string $YourReference = null;
	public DeliveryMethodTypeView $DeliveryMethod;
	public LanguageTypeView $CommunicationLanguage;
	public ?string $Message = null;
	public ?string $InvoiceNumber = null;
	public ?AmountView $InvoiceFee = null;
	public ?AmountView $FreightFee = null;
	public bool $VatIsIncluded;

	/** Format: int32 */
	public ?int $SendByMailIfEmailNotViewedInDays = null;
	public ?DeliveryAddressOverrideView $DeliveryAddressOverride = null;
	public ?DebtCollectionDetailsView $DebtCollectionDetails = null;
	public ?ReminderInvoiceDetailsView $ReminderInvoiceDetails = null;
	public ?ReverseVATDetailsView $ReverseVATDetails = null;
	public ?RotRutDetailsView $RotRutDetails = null;
	public ?PaymentOverrideView $PaymentOverride = null;
	public ?array $Appendixes = null;
	public ?array $Attachments = null;
	public ?AutogiroWithdrawalView $Autogiro = null;
	public ?CreditCardWithdrawalView $CreditCard = null;
	public ?InvoiceFileView $InvoicePDF = null;
	public ?string $CreditingInvoicePublicId = null;
	public ?string $ExternalReference = null;
	public bool $IsLocked;
	public bool $UseDebtorBalance;

	/** Format: date-time */
	public ?string $InvoiceSendDateOverride = null;
}
