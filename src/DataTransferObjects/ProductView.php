<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ProductView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $ProductPublicId,
		/** Format: guid */
		public string $CreditorPublicId,
		public bool $IsActive,
		public float $UnitPrice,
		public float $VAT,
		/**
		 * 0: Service
		 * 1: Commodity
		 * 2: Package
		 * 3: VAT
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $ProductType,
		public ?string $ArticleNumber = null,
		public ?string $ProductExternalId = null,
		public ?string $Description = null,
		public ?string $Units = null,
		/** Format: int32 */
		public ?int $BookKeepingAccount = null,
		/** Format: int32 */
		public ?int $BookKeepingSalesEUAccount = null,
		/** Format: int32 */
		public ?int $BookKeepingSalesEUVATAccount = null,
		/** Format: int32 */
		public ?int $BookKeepingSalesNonEUAccount = null,
		/** Format: int32 */
		public ?int $BookKeepingPurchaseAccount = null,
		/** Format: int32 */
		public ?int $BookKeepingVATAccount = null,
		/** Format: int32 */
		public ?int $BookKeepingPurchaseVATAccount = null,
		public ?string $ConfigurationCode = null,
	) {
	}
}
