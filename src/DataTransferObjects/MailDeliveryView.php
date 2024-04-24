<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class MailDeliveryView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $CreditorPublicId,
		/**
		 * 0: Unknown
		 * 1: Priority
		 * 2: Economy
		 * 4: Protected
		 * @var string|int
		 */
		public string|int $PostageType,
		public ?FileView $File = null,
		public ?array $Appendixes = null,
		public ?bool $SendAsPriorityMail = null,
		public ?bool $SendWithColor = null,
		public ?bool $IsSimplex = null,
	) {
	}
}
