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
	public DiscountTypeView $DiscountType;
	public float $VAT;
	public RecordTypeView $RecordType;
	public ?string $CostCenter = null;
	public ?string $Project = null;
	public bool $Hidden;
	public ?AmountView $TotalIncVAT = null;
	public ?AmountView $TotalExclVAT = null;
	public ?AmountView $TotalExclVATNoDiscount = null;
}
