<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class DebtCollectionActionStateView extends DataTransferObject
{
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

	/** Format: int32 */
	public int $NumberOfSentInvoiceReminders;

	/** Format: date-time */
	public ?string $DebtCollectionInvoiceSentDate = null;

	/** Format: date-time */
	public ?string $LatePaymentInvoiceSentDate = null;

	/** Format: date-time */
	public ?string $SentToBailiffDate = null;

	/** Format: date-time */
	public ?string $SentToBailiffEnforcementDate = null;

	/** Format: date-time */
	public ?string $NextEventDate = null;

	/** Format: date-time */
	public ?string $ClosedDate = null;
	public ?string $NextEvent = null;
	public bool $IsPaused;

	/** Format: date-time */
	public ?string $DisputedDate = null;

	/** Format: date-time */
	public ?string $AttestedDate = null;
	public bool $HasPreviouslyBeenSentToInstallmentPlan;
}
