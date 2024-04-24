<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class SelfInvoiceActionRecordView extends Data
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
		/**
		 * 0: Standard
		 * 1: Message
		 * 2: Package
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $RecordType,
		public bool $Hidden,
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
		public ?array $Dimensions = null,
		public ?AmountView $TotalIncVAT = null,
		public ?AmountView $TotalExclVAT = null,
		public ?AmountView $TotalExclVATNoDiscount = null,
	) {
	}
}
