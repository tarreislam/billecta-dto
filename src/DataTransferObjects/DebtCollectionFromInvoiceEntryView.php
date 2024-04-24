<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class DebtCollectionFromInvoiceEntryView extends Data
{
	public function __construct(
		/**
		 * 0: Email
		 * 1: Mail
		 * 2: Manually
		 * 3: SMS
		 * 4: EInvoice
		 * 5: Kivra
		 * 6: Avy
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $DeliveryMethod,
		/**
		 * 0: SV
		 * 1: EN
		 * 2: FI
		 * @var string|int
		 */
		public string|int $CommunicationLanguage,
		/** Format: int32 */
		public int $NumberOfReminders,
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
		public int $PaymentTermsInDays,
		public float $InterestPercentage,
		/** Format: int32 */
		public int $InterestStartInDaysAfterDueDate,
		public bool $Eviction,
		public bool $InformSocialWelfare,
		public ?string $SourcePublicId = null,
		public ?string $ReasonDescription = null,
		/**
		 * 0: Fixed
		 * 1: AboveEffectiveReference
		 * 2: NoInterest
		 * -1: Unknown
		 * @var string|int|null
		 */
		public string|int|null $InterestType = null,
		public ?string $OurReference = null,
		public ?string $YourReference = null,
		public ?string $ReasonForHigherInterest = null,
		public ?DeliveryAddressOverrideView $DeliveryAddressOverride = null,
		public ?PaymentOverrideView $PaymentOverride = null,
	) {
	}
}
