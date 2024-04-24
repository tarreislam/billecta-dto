<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ContractInvoiceActionRecordView extends Data
{
	public function __construct(
		/** Format: int32 */
		public int $SequenceNo,
		public float $DiscountPercentage,
		/**
		 * 0: Amount
		 * 1: Percentage
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $DiscountType,
		public float $VAT,
		public bool $RotRutActivated,
		/** Format: int32 */
		public int $RotRutHours,
		/**
		 * 0: Construction
		 * 1: Electricity
		 * 2: GlassMetalWork
		 * 3: GroundDrainageWork
		 * 4: Masonry
		 * 5: PaintingWallpapering
		 * 6: Hvac
		 * 100: BabySitting
		 * 101: Moving
		 * 102: ITServices
		 * 103: TextileClothing
		 * 104: PersonalCare
		 * 105: SnowPlowing
		 * 106: Cleaning
		 * 107: Gardening
		 * 108: WhiteGoods
		 * 109: Furnituring
		 * 110: HouseSupervision
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $RotRutType,
		/**
		 * 0: Standard
		 * 1: Message
		 * 2: Package
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $RecordType,
		public bool $VatIsIncluded,
		public bool $Hidden,
		public bool $PostInvoice,
		public bool $AdvanceInvoice,
		/** Format: guid */
		public ?string $ProductPublicId = null,
		public ?string $Units = null,
		public ?string $ArticleDescription = null,
		public ?string $ArticleNumber = null,
		public ?float $Quantity = null,
		public ?AmountView $UnitPrice = null,
		public ?AmountView $DiscountAmount = null,
		public ?string $CostCenter = null,
		public ?string $Project = null,
		public ?AmountView $RotRutAmount = null,
		public ?AmountView $RotRutMaterialCostAmount = null,
		public ?string $ExternalReference = null,
		/** Format: date-time */
		public ?string $InvoicedFrom = null,
		/** Format: date-time */
		public ?string $InvoicedTo = null,
		public ?array $Dimensions = null,
		public ?AmountView $TotalIncVAT = null,
		public ?AmountView $TotalExclVATNoDiscount = null,
		public ?AmountView $TotalExclVAT = null,
	) {
	}
}
