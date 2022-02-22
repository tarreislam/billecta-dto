<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class DebtCollectionActionStateView extends DataTransferObject
{
	public DebtCollectionActionStageTypeView $Stage;

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
