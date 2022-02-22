<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class InvoiceActionView extends DataTransferObject
{
	public ?string $ActionPublicId = null;

	/** Format: guid */
	public string $CreditorPublicId;
	public LanguageTypeView $CommunicationLanguage;

	/** Format: date-time */
	public string $Created;
	public DeliveryMethodTypeView $DeliveryMethod;
	public ?DebtorView $Debtor = null;
	public ?InvoiceActionStateView $State = null;
	public ?array $Invoices = null;
	public ?array $Records = null;
	public ?array $Events = null;

	/** Format: date-time */
	public string $InvoiceDate;

	/** Format: date-time */
	public string $DueDate;

	/** Format: date-time */
	public ?string $DeliveryDate = null;

	/** Format: int32 */
	public int $PaymentTermsInDays;

	/** Format: int32 */
	public int $InterestTermsInDays;
	public float $InterestPercentage;
	public InterestTypeView $InterestType;
	public ?string $OurReference = null;
	public ?string $YourReference = null;

	/** Format: int32 */
	public int $InterestStartInDaysAfterDueDate;
	public ?AmountView $InvoicedAmount = null;
	public ?AmountView $InterestAmount = null;
	public ?AmountView $RotRutDeductionAmount = null;
	public ?AmountView $CurrentAmount = null;
	public ?AmountView $CreditedAmount = null;
	public ?AmountView $PaidAmount = null;
	public ?AmountView $WriteOffAmount = null;
	public ?AmountView $AwaitingPaymentTransferAmount = null;
	public ?AmountView $TotalVATAmount = null;
	public ?AmountView $CentRoundingAmount = null;
	public ?string $DebtCollectionActionPublicId = null;
	public ?string $ReminderInvoiceActionPublicId = null;
	public ?DeliveryAddressOverrideView $DeliveryAddressOverride = null;
	public ?CreditingInvoiceView $CreditingInvoice = null;
	public ?AutogiroWithdrawalView $Autogiro = null;
	public ?CreditCardWithdrawalView $CreditCard = null;
	public ?string $Message = null;
	public ?string $InvoiceNumber = null;
	public bool $CanPause;
	public bool $CanResume;
	public bool $CanCreateCreditInvoice;
	public bool $CanCreateInterestInvoice;
	public bool $CanRegisterPayment;
	public bool $CanMakeManual;
	public bool $CanSendManualInvoice;
	public bool $CanResendManualInvoice;
	public bool $CanSendManualReminderInvoice;
	public bool $CanPostpone;
	public bool $CanSendToDebtCollection;
	public bool $CanDispute;
	public bool $CanUnDispute;
	public bool $CanSell;
	public bool $CanCancelSalesRequest;
	public bool $CanCreateAutogiroWithdrawal;
	public ?PaymentOverrideView $PaymentOverride = null;
	public ?DebtCollectionDetailsView $DebtCollectionDetails = null;
	public ?ReminderInvoiceDetailsView $ReminderInvoiceDetails = null;
	public ?ReverseVATDetailsView $ReverseVATDetails = null;
	public ?RotRutDetailsView $RotRutDetails = null;
	public ?string $ReasonForHigherInterest = null;
	public ?array $Appendixes = null;
	public ?array $Attachments = null;
	public ActionTypeView $ActionType;
	public ?AmountView $InvoiceFee = null;
	public ?AmountView $FreightFee = null;
	public bool $VatIsIncluded;

	/** Format: int32 */
	public ?int $SendByMailIfEmailNotViewedInDays = null;
	public ?string $ExternalReference = null;
	public ?string $ContractInvoiceActionPublicId = null;
}
