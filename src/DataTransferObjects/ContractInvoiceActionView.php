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

	/**
	 * 0: Email
	 * 1: Mail
	 * 2: Manually
	 * 3: SMS
	 * 4: EInvoice
	 * 5: Kivra
	 * -1: Unknown
	 * @var string|int
	 */
	public $DeliveryMethod;

	/**
	 * 0: SV
	 * 1: EN
	 * 2: FI
	 * @var string|int
	 */
	public $CommunicationLanguage;

	/**
	 * 0: Fixed
	 * 1: AboveEffectiveReference
	 * 2: NoInterest
	 * -1: Unknown
	 * @var string|int
	 */
	public $InterestType = null;

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

	/**
	 * 0: None
	 * 1: Previous
	 * 2: Current
	 * 3: Next
	 * -1: Unknown
	 * @var string|int
	 */
	public $InvoicePeriod;

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

	/**
	 * 0: DebtCollectionAction
	 * 1: InstallmentPlanAction
	 * 2: InvoiceAction
	 * 3: CreditInvoiceAction
	 * 5: ContractInvoiceAction
	 * 6: SelfInvoiceAction
	 * 7: VerificationInvoiceAction
	 * 8: DebentureAction
	 * 9: InterestInvoiceAction
	 * 10: SupplierInvoiceAction
	 * 11: ReconciliationInvoiceAction
	 * 12: OrderAction
	 * 13: OrderInvoiceAction
	 * 14: PaymentAdviceAction
	 * -1: Unknown
	 * @var string|int
	 */
	public $GenerateInvoicesOfActionType;
}
