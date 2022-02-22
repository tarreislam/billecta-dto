<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ReconciliationInvoiceActionEntryView extends DataTransferObject
{
	/** Format: guid */
	public string $CreditorPublicId;
	public ?ReconciliationDebtorView $Debtor = null;
	public DeliveryMethodTypeView $DeliveryMethod;
	public LanguageTypeView $CommunicationLanguage;
	public ?string $ExternalUrl = null;
	public ?string $InvoiceNumber = null;
	public ?string $OCR = null;
	public ?FileView $InvoiceFile = null;
	public ?string $ExternalReference = null;
	public ?AmountView $CurrentAmount = null;
	public ?AmountView $CurrentReminderFees = null;
	public ?bool $SendWithColor = null;
	public ?bool $SendAsPriorityMail = null;

	/** Format: date-time */
	public ?string $AutogiroWithdrawalDate = null;

	/** Format: date-time */
	public ?string $CreditCardWithdrawalDate = null;
}
