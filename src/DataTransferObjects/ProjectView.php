<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ProjectView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $CreditorPublicId,
		/**
		 * 0: NotStarted
		 * 1: Ongoing
		 * 2: Compelted
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $Status,
		public ?string $ProjectNumber = null,
		public ?string $Description = null,
		public ?string $ProjectLeader = null,
		public ?string $ContactPerson = null,
		public ?string $Comments = null,
		/** Format: date-time */
		public ?string $StartDate = null,
		/** Format: date-time */
		public ?string $EndDate = null,
	) {
	}
}
