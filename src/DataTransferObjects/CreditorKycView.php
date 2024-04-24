<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class CreditorKycView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $CreditorPublicId,
		/**
		 * 0: Pending
		 * 1: Approved
		 * 2: Rejected
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $State,
		public ?CreditorKycFormView $CreditorKycForm = null,
		public ?string $SignedByName = null,
		public ?string $SignedBySSN = null,
		/** Format: date-time */
		public ?string $SignedDate = null,
		/** Format: guid */
		public ?string $MobileBankIdTokenUsedForSign = null,
	) {
	}
}
