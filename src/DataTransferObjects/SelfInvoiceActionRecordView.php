<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class SelfInvoiceActionRecordView extends DataTransferObject
{
	/** Format: guid */
	public ?string $ProductPublicId = null;

	/** Format: int32 */
	public int $SequenceNo;
	public ?string $Units = null;
	public ?string $ArticleDescription = null;
	public ?string $ArticleNumber = null;
	public ?float $Quantity = null;
	public ?AmountView $UnitPrice = null;
	public ?AmountView $DiscountAmount = null;
	public float $DiscountPercentage;

	/**
	 * 0: Amount
	 * 1: Percentage
	 * -1: Unknown
	 * @var string|int
	 */
	public $DiscountType;
	public float $VAT;

	/**
	 * 0: Standard
	 * 1: Message
	 * 2: Package
	 * -1: Unknown
	 * @var string|int
	 */
	public $RecordType;
	public ?string $CostCenter = null;
	public ?string $Project = null;
	public bool $Hidden;
	public ?AmountView $TotalIncVAT = null;
	public ?AmountView $TotalExclVAT = null;
	public ?AmountView $TotalExclVATNoDiscount = null;
}
