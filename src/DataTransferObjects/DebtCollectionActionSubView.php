<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class DebtCollectionActionSubView extends DataTransferObject
{
	public ?string $ActionPublicId = null;

	/** Format: guid */
	public string $CreditorPublicId;

	/** Format: guid */
	public string $DebtorPublicId;
	public ?string $CreditorOrgNo = null;
	public ?string $CreditorName = null;
	public ?string $DebtorOrgNo = null;
	public ?string $DebtorName = null;
	public ?AmountView $CurrentAmount = null;
	public ?AmountView $InvoicedAmount = null;

	/**
	 * 0: None
	 * 1: Created
	 * 2: ReminderInvoiceSent
	 * 3: DebtCollectionInvoiceSent
	 * 4: SentToBailiff
	 * 5: Manual
	 * 6: Completed
	 * 7: Cancelled
	 * 8: ForeignManual
	 * 9: AwaitingFeePayment
	 * 13: Attested
	 * 14: DebtCollectionClaimDue
	 * 24: LatePaymentInvoiceSent
	 * 25: DebtCollectionClaimResponseRequested
	 * 26: ReadyForBailiff
	 * 27: LongTermSurveilance
	 * 28: VerdictObtained
	 * 29: SentToBailiffEnforcement
	 * 30: ForeignDebtorLetterSent
	 * 31: ForeignCreditorLetterSent
	 * 32: EnforcementResponseRequested
	 * 33: ReadyForEnforcement
	 * 35: ForeignSentToLocalRepresentative
	 * 36: ForeignMakeReadyForLocalRepresentative
	 * 37: ReadyForAttest
	 * -1: Unknown
	 * @var string|int
	 */
	public $Stage;

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
	public $ActionType;

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

	/** Format: date-time */
	public string $Created;

	/** Format: date-time */
	public ?string $ClosedDate = null;

	/** Format: date-time */
	public ?string $AttestedDate = null;

	/** Format: date-time */
	public ?string $NextEventDate = null;
	public ?string $NextEvent = null;

	/** Format: date-time */
	public string $OriginalDueDate;

	/** Format: date-time */
	public string $OriginalInvoiceDate;
	public ?string $OriginalInvoiceNumber = null;
	public bool $IsPaused;
	public bool $IsCommented;
	public bool $IsDisputed;

	/**
	 * 0: Unknown
	 * 1: Received
	 * 2: Opened
	 * 3: Viewed
	 * @var string|int
	 */
	public $DeliveryStatus;
	public ?array $Files = null;
	public ?array $OCRs = null;
	public ?array $InvoiceNumbers = null;
	public ?string $InvoiceSourcePublicId = null;

	/**
	 * 0: None
	 * 1: DebtCollectionAction
	 * 2: InvoiceAction
	 * 3: ReconciliationInvoiceAction
	 * -1: Unknown
	 * @var string|int
	 */
	public $DebtCollectionActionSource;
	public ?string $InstallmentPlanPublicId = null;

	/**
	 * 0: SV
	 * 1: EN
	 * 2: FI
	 * @var string|int
	 */
	public $CommunicationLanguage;

	/** Format: int32 */
	public int $PaymentTermsInDays;
	public float $InterestPercentage;
}
