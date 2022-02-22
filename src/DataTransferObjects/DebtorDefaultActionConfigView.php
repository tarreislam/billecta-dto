<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class DebtorDefaultActionConfigView extends DataTransferObject
{
	public bool $ActivateDefaultActionConfigOverride;
	public DebtCollectionActionLevelTypeView $StartDebtCollectionActionLevel;
	public DebtCollectionActionLevelTypeView $EndDebtCollectionActionLevel;
	public DeliveryMethodTypeView $DeliveryMethod;
	public LanguageTypeView $CommunicationLanguage;

	/** Format: int32 */
	public int $PaymentTermsInDays;

	/** Format: int32 */
	public int $DebtCollectionPaymentTermsInDays;

	/** Format: int32 */
	public int $InterestTermsInDays;
	public float $InterestPercentage;

	/** Format: int32 */
	public int $InvoicePaymentTermsInDays;
	public InterestTypeView $InterestType;

	/** Format: int32 */
	public int $InterestStartInDaysAfterDueDate;
	public ?string $ReasonForHigherInterest = null;
	public ?string $OurReference = null;

	/** Format: int32 */
	public int $NumberOfReminders;
	public ?string $CurrencyCode = null;

	/** Format: int32 */
	public int $SendInvoiceToDebtCollectionAfterDays;
	public bool $SendInvoiceToDebtCollection;
	public ?bool $IncludePdfInEmail = null;
	public bool $SendReminderInvoice;

	/** Format: int32 */
	public int $SendReminderInvoiceDaysAfterDueDate;
	public float $InvoiceFee;
	public float $ReminderInvoiceFee;

	/** Format: int32 */
	public int $SendByMailIfEmailNotViewedInDays;
	public bool $SendByMailIfEmailNotViewedInDaysEnabled;

	/** Format: int32 */
	public int $ReminderInvoicePaymentTermsInDays;
	public ?string $InvoiceComment = null;
}
