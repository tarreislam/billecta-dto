<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class SelfInvoiceActionView extends DataTransferObject
{
	public ?string $ActionPublicId = null;

	/** Format: guid */
	public string $CreditorPublicId;
	public LanguageTypeView $CommunicationLanguage;

	/** Format: date-time */
	public string $Created;
	public DeliveryMethodTypeView $DeliveryMethod;
	public ?DebtorView $Debtor = null;
	public ?SelfInvoiceActionStateView $State = null;
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
	public ?string $OurReference = null;
	public ?string $CreditingSelfInvoicePublicId = null;
	public ?string $YourReference = null;
	public ?string $ExternalId = null;
	public ?string $BankgiroNo = null;
	public ?string $TransferReference = null;
	public ?ReferenceTypeView $TransferReferenceType = null;
	public ?AmountView $InvoicedAmount = null;
	public ?AmountView $InterestAmount = null;
	public ?AmountView $CurrentAmount = null;
	public ?AmountView $CreditedAmount = null;
	public ?AmountView $PaidAmount = null;
	public ?AmountView $TotalVATAmount = null;
	public ?string $Message = null;
	public bool $CanPause;
	public bool $CanResume;
	public bool $CanCredit;
	public bool $CanRegisterPayment;
	public bool $CanMakeManual;
	public bool $CanSendManualInvoice;
	public bool $CanResendManualInvoice;
	public bool $CanCancel;
	public ?array $Appendixes = null;
	public ?array $Attachments = null;
	public ActionTypeView $ActionType;
}
