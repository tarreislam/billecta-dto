<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class DefaultActionConfigView extends DataTransferObject
{
	/** Format: guid */
	public string $CreditorPublicId;
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
	public ?string $ReasonDescription = null;

	/** Format: int32 */
	public int $SendInvoiceToDebtCollectionAfterDays;
	public bool $SendInvoiceToDebtCollection;
	public ?bool $IncludePdfInEmail = null;
	public bool $SendReminderInvoice;

	/** Format: int32 */
	public int $SendReminderInvoiceDaysAfterDueDate;
	public float $ReminderInvoiceFee;
	public float $InvoiceFee;
	public ?array $AutomaticInvoiceWriteOffThresholds = null;
	public ?array $InvoiceFeeOnlyOnDeliveryMethods = null;

	/** Format: int32 */
	public int $SendByMailIfEmailNotViewedInDays;
	public bool $SendByMailIfEmailNotViewedInDaysEnabled;
	public bool $SendAsPriorityMail;
	public bool $SendWithColor;
	public bool $SendDebtCollectionsWithMail;

	/** Format: int32 */
	public int $ReminderInvoicePaymentTermsInDays;
	public ?string $InvoiceComment = null;

	/** Format: int32 */
	public ?int $ReminderGraceDays = null;
	public ?float $MinAmountForSendingReminder = null;
	public ?array $IncomingPaymentNotificationMethods = null;

	/** Format: guid */
	public ?string $DebtCollectionMessagePublicId = null;
	public bool $DoNotAutomaticallySendForeignInvoicesToDebtCollection;
	public bool $ShowUnpaidInvoicesOnNextInvoice;
	public bool $UsageOfDebtorBalanceIsAppliedByDefault;
	public bool $DontRequestDueClaimResponse;
}
