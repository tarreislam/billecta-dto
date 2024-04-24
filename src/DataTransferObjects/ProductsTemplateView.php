<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ProductsTemplateView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $CreditorPublicId,
		public float $DefaultSalesVAT,
		/**
		 * 0: Service
		 * 1: Commodity
		 * 2: Package
		 * 3: VAT
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $DefaultProductType,
		/** Format: int32 */
		public ?int $DefaultSalesAccount = null,
		/** Format: int32 */
		public ?int $DefaultSalesEUAccount = null,
		/** Format: int32 */
		public ?int $DefaultSalesEUVATAccount = null,
		/** Format: int32 */
		public ?int $DefaultSalesNonEUAccount = null,
		/** Format: int32 */
		public ?int $DefaultPurchaseEUAccount = null,
		/** Format: int32 */
		public ?int $DefaultPurchaseEUVATAccount = null,
		/** Format: int32 */
		public ?int $DefaultPurchaseNonEUAccount = null,
		public ?string $DefaultSalesUnits = null,
		/** Format: int32 */
		public ?int $DefaultPurchaseAccount = null,
		/** Format: int32 */
		public ?int $DefaultVATAccount = null,
		/** Format: int32 */
		public ?int $DefaultPurchaseVATAccount = null,
	) {
	}
}
