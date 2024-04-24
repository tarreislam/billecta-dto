<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class BankAccountRequestView extends Data
{
	public function __construct(
		/**
		 * 0: OEB
		 * 2: SHB
		 * 3: ICA
		 * 4: LFB
		 * 5: NB
		 * 6: SBAB
		 * 7: SEB
		 * 8: SKB
		 * 9: SYD
		 * 10: FSPA
		 * 11: FSPASB
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $Bank,
		/**
		 * 0: Waiting
		 * 1: Success
		 * 2: Failed
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $Status,
		public bool $IsBankIdAutostartTokenRequired,
		public ?string $PublicId = null,
		public ?string $SSN = null,
		public ?string $QR = null,
		public ?array $AccountNumbers = null,
		public ?string $BankIdAutostartToken = null,
		public ?string $FailureMessage = null,
		public ?string $FailureCode = null,
	) {
	}
}
