<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class InstallmentPlanActionStageTypeView extends DataTransferObject
{
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
	 */
	public int $value;
}
