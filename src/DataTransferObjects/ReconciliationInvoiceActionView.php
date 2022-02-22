<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ReconciliationInvoiceActionView extends DataTransferObject
{
	public ?string $ActionPublicId = null;

	/** Format: guid */
	public string $CreditorPublicId;
	public ?ReconciliationDebtorView $Debtor = null;
	public ?ReconciliationInvoiceActionStateView $State = null;
	public ?array $ReminderInvoices = null;
	public DeliveryMethodTypeView $DeliveryMethod;
	public LanguageTypeView $CommunicationLanguage;
	public ?string $InvoiceNumber = null;
	public ?string $OCR = null;
	public ?AmountView $InvoicedAmount = null;
	public ?AmountView $CurrentAmount = null;
	public ?AmountView $CurrentReminderFees = null;
	public ?string $ExternalReference = null;
	public ?FileView $InvoiceFile = null;
	public ?string $ExternalUrl = null;
	public ?array $Events = null;

	/** Format: date-time */
	public string $Created;
	public ?bool $SendWithColor = null;
	public ?bool $SendAsPriorityMail = null;
	public ?string $DebtCollectionActionPublicId = null;

	/** Format: date-time */
	public ?string $AutogiroWithdrawalDate = null;

	/** Format: date-time */
	public ?string $CreditCardWithdrawalDate = null;
}
