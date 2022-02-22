<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ContractInvoiceActionView extends DataTransferObject
{
	public ?string $ActionPublicId = null;

	/** Format: guid */
	public string $CreditorPublicId;

	/** Format: guid */
	public string $DebtorPublicId;

	/** Format: int32 */
	public int $PaymentTermsInDays;
	public ?AmountView $Amount = null;
	public ?array $Records = null;

	/** Format: int32 */
	public int $InterestTermsInDays;
	public ?string $ReasonForHigherInterest = null;
	public float $InterestPercentage;
	public ?string $OurReference = null;
	public ?string $YourReference = null;
	public DeliveryMethodTypeView $DeliveryMethod;
	public LanguageTypeView $CommunicationLanguage;
	public ?InterestTypeView $InterestType = null;

	/** Format: int32 */
	public int $InterestStartInDaysAfterDueDate;
	public ?string $Message = null;
	public ?string $ExternalReference = null;
	public bool $AutoAttest;
	public bool $AutoMerge;
	public bool $PayLastDayOfMonth;
	public ?DeliveryAddressOverrideView $DeliveryAddressOverride = null;
	public ?DebtCollectionDetailsView $DebtCollectionDetails = null;
	public ?ReverseVATDetailsView $ReverseVATDetails = null;
	public ?RecurrenceDetailsView $RecurrenceDetails = null;
	public ?RotRutDetailsView $RotRutDetails = null;
	public ?PaymentOverrideView $PaymentOverride = null;
	public ?ContractInvoiceActionStateView $State = null;
	public ?array $Appendixes = null;
	public ?array $Attachments = null;
	public ?string $ContractNumber = null;
	public ContractInvoicePeriodRuleTypeView $InvoicePeriod;

	/** Format: int32 */
	public int $InvoicePeriodMonthsOffset;
	public ?AmountView $InvoiceFee = null;
	public ?AmountView $FreightFee = null;
	public bool $HideDateOnPeriodisedRecords;
	public bool $AutogiroWithdrawalEnabled;
	public bool $CreditCardWithdrawalEnabled;
	public bool $VatIsIncluded;

	/** Format: int32 */
	public ?int $SendByMailIfEmailNotViewedInDays = null;
	public ?array $Events = null;
	public ?ReminderInvoiceDetailsView $ReminderInvoiceDetails = null;
	public ActionTypeView $GenerateInvoicesOfActionType;
}
