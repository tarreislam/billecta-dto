<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ContractInvoiceActionSubView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $CreditorPublicId,
		/** Format: guid */
		public string $DebtorPublicId,
		/** Format: date-time */
		public string $Created,
		public bool $IsPaused,
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
		 * 0: Monthly
		 * 1: Yearly
		 * 2: Quarterly
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $RecurrenceInterval,
		public bool $AutogiroWithdrawalEnabled,
		public ?string $ActionPublicId = null,
		public ?string $CostCenter = null,
		public ?string $CreditorOrgNo = null,
		public ?string $CreditorName = null,
		public ?AmountView $Amount = null,
		public ?string $DebtorOrgNo = null,
		public ?string $DebtorName = null,
		/** Format: date-time */
		public ?string $LastRunDate = null,
		/** Format: date-time */
		public ?string $NextRunDate = null,
		public ?string $ContractNumber = null,
		/** Format: date-time */
		public ?string $Start = null,
		/** Format: date-time */
		public ?string $End = null,
		public ?string $OurReference = null,
		public ?string $YourReference = null,
	) {
	}
}
