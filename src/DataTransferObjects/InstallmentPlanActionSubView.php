<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class InstallmentPlanActionSubView extends DataTransferObject
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
	 * 5: Manual
	 * 6: Completed
	 * 7: Cancelled
	 * 9: AwaitingFeePayment
	 * 11: InstallmentPlanInvoiceSent
	 * 13: Attested
	 * 15: ReturnToSourceRequested
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
