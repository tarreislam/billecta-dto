<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class InvoiceActionEventView extends DataTransferObject
{
	public ?string $Title = null;
	public ?string $Content = null;

	/** Format: date-time */
	public string $EventDate;
	public ?string $EventBy = null;
	public ?string $Reference = null;

	/**
	 * 0: Created
	 * 1: Attested
	 * 2: InvoiceSent
	 * 3: Paid
	 * 4: Credited
	 * 5: InvoiceDue
	 * 6: WillBeSentToDebtCollection
	 * 7: SentToDebtCollection
	 * 8: Cancelled
	 * 9: CommentedByDebtor
	 * 10: CommentedByCreditor
	 * 11: ReadByUser
	 * 12: Paused
	 * 13: Resumed
	 * 14: Disputed
	 * 15: UnDisputed
	 * 16: SmsSent
	 * 19: SmsWillBeSent
	 * 21: DebtCollectionSent
	 * 22: ManagedForBailiffRegistration
	 * 23: WillBeManagedForBailiffRegistration
	 * 24: WillSendDebtCollectionInvoice
	 * 25: WillSendReminderInvoice
	 * 26: OriginalInvoiceDue
	 * 27: ReminderDue
	 * 28: DebtCollectionDue
	 * 29: WillSendPartialInvoice
	 * 30: InstallmentPlanPartialInvoiceSent
	 * 31: Completed
	 * 32: PartialInvoiceDue
	 * 33: ManagedForReturnToDebtCollection
	 * 34: Updated
	 * 35: PaymentWillBeMade
	 * 36: MadeManual
	 * 37: PaymentCancelled
	 * 38: PaymentSent
	 * 39: AwatingPaymentAcknowledgment
	 * 41: ReminderInvoiceSent
	 * 42: WillSendInvoice
	 * 43: Moved
	 * 44: EmailEvent
	 * 45: UnAttested
	 * 46: InvoiceSold
	 * 47: InvoiceSaleRequestDenied
	 * 49: AwaitingInvoiceSaleRequestResponse
	 * 50: InvoiceSaleRequestCancelled
	 * 51: InvoiceSaleRequested
	 * 52: AutogiroPaymentPostponed
	 * 53: AutogiroCancelledWithdrawal
	 * 54: AutogiroApprovalAdded
	 * 55: AutogiroApprovalChanged
	 * 56: AutogiroApprovalRemoved
	 * 57: AutogiroWithdrawal
	 * 58: WillSendLatePaymentInvoice
	 * 59: OverPayment
	 * 60: FuturePayment
	 * 61: EInvoiceRegistered
	 * 62: EInvoiceUnregistered
	 * 63: EInvoiceWasRejected
	 * 64: WrittenOff
	 * 65: LongTermSurveilance
	 * 66: AppendixAdded
	 * 67: AppendixCleared
	 * 68: SmsEvent
	 * 69: InstallmentPlanRequested
	 * 70: SentToBailiff
	 * 71: SentToBailiffExecution
	 * 72: CreditCardAdded
	 * 73: CreditCardRemoved
	 * 74: CreditCardWithdrawal
	 * 75: CreditCardCancelledWithdrawal
	 * 76: VerdictNumberObtained
	 * 77: ManagedForBailiffEnforcementRegistration
	 * 78: PaymentRefunded
	 * 79: MessageSendToSocialWelfare
	 * 80: ForeignSentToLocalRepresentative
	 * 81: ChangedOwner
	 * 82: CreditorCommentByAdmin
	 * 83: ForeignMakeReadyForLocalRepresentative
	 * 84: SupplementSentToKFM
	 * 85: EInvoiceEvent
	 * 86: DebtorContractSigned
	 * 87: DebtorContractSent
	 * 88: DebtorContractArchived
	 * 89: DebtorContractFinanced
	 * 90: FinancierRequested
	 * 91: BalanceFromInvoice
	 * 92: EvictionMessageSentToDebtor
	 * 996: PublicCommentByAdmin
	 * 998: Archived
	 * 1000: Unknown
	 * @var string|int
	 */
	public $EventType;
	public bool $IsPublic;
	public bool $HasOccured;

	/** Format: guid */
	public string $EventPublicId;
}
