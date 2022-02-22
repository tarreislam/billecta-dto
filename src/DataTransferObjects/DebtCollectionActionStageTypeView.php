<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class DebtCollectionActionStageTypeView extends DataTransferObject
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
	 */
	public int $value;
}
