<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class DebtCollectionActionView extends DataTransferObject
{
	public ?string $ActionPublicId = null;

	/** Format: date-time */
	public string $Created;

	/** Format: guid */
	public string $CreditorPublicId;
	public ?DebtorView $Debtor = null;
	public DeliveryMethodTypeView $DeliveryMethod;
	public LanguageTypeView $CommunicationLanguage;
	public ?string $ReasonDescription = null;

	/** Format: int32 */
	public int $NumberOfReminders;
	public DebtCollectionActionLevelTypeView $StartDebtCollectionActionLevel;
	public DebtCollectionActionLevelTypeView $EndDebtCollectionActionLevel;

	/** Format: date-time */
	public string $OriginalInvoiceDate;

	/** Format: date-time */
	public string $OriginalDueDate;
	public ?string $OriginalInvoiceNumber = null;
	public ?AmountView $OriginalAmount = null;
	public ?FileView $OriginalInvoiceFile = null;

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
	public ?string $ReasonForHigherInterest = null;
	public ?AmountView $DebtAmount = null;
	public ?AmountView $FeeAmount = null;
	public ?AmountView $InterestAmount = null;
	public ?AmountView $CurrentAmount = null;
	public ?DebtCollectionActionStateView $State = null;
	public ?array $Invoices = null;
	public ?string $InstallmentPlanPublicId = null;
	public ?string $InvoiceSourcePublicId = null;
	public ActionSourceTypeView $DebtCollectionActionSource;
	public ?DeliveryAddressOverrideView $DeliveryAddressOverride = null;
	public ?array $Events = null;
	public bool $CanCancel;
	public bool $CanPause;
	public bool $CanResume;
	public bool $CanCredit;
	public bool $CanSendToBailiff;
	public bool $CanSendToBailiffEnforcement;
	public bool $CanSendToLongTermSurveilance;
	public bool $CanPostpone;
	public bool $CanCreateInstallmentPlan;
	public bool $CanDisputeAction;
}
