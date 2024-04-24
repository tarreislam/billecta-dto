<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class DebtCollectionDetailsView extends Data
{
	public function __construct(
		public bool $SendToDebtCollection,
		/**
		 * 0: LatePaymentFee
		 * 1: Reminders
		 * 2: DebtCollection
		 * 3: Bailiff
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $StartDebtCollectionActionLevel,
		/**
		 * 0: LatePaymentFee
		 * 1: Reminders
		 * 2: DebtCollection
		 * 3: Bailiff
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $EndDebtCollectionActionLevel,
		/** Format: int32 */
		public int $NumberOfReminders,
		/** Format: int32 */
		public int $DaysDelayAfterDueDate,
		/** Format: int32 */
		public int $PaymentTermsInDays,
		public bool $Eviction,
		public bool $InformSocialWelfare,
	) {
	}
}
