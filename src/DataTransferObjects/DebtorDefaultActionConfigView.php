<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class DebtorDefaultActionConfigView extends DataTransferObject
{
	public bool $ActivateDefaultActionConfigOverride;

	/**
	 * 0: LatePaymentFee
	 * 1: Reminders
	 * 2: DebtCollection
	 * 3: Bailiff
	 * -1: Unknown
	 */
	public int $StartDebtCollectionActionLevel;

	/**
	 * 0: LatePaymentFee
	 * 1: Reminders
	 * 2: DebtCollection
	 * 3: Bailiff
	 * -1: Unknown
	 */
	public int $EndDebtCollectionActionLevel;

	/**
	 * 0: Email
	 * 1: Mail
	 * 2: Manually
	 * 3: SMS
	 * 4: EInvoice
	 * 5: Kivra
	 * -1: Unknown
	 */
	public int $DeliveryMethod;

	/**
	 * 0: SV
	 * 1: EN
	 * 2: FI
	 */
	public int $CommunicationLanguage;

	/** Format: int32 */
	public int $PaymentTermsInDays;

	/** Format: int32 */
	public int $DebtCollectionPaymentTermsInDays;

	/** Format: int32 */
	public int $InterestTermsInDays;
	public float $InterestPercentage;

	/** Format: int32 */
	public int $InvoicePaymentTermsInDays;

	/**
	 * 0: Fixed
	 * 1: AboveEffectiveReference
	 * 2: NoInterest
	 * -1: Unknown
	 */
	public int $InterestType;

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
