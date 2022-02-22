<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class InvoiceActionRecordView extends DataTransferObject
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
	public ?string $CostCenter = null;

	/** Format: date-time */
	public ?string $PeriodStart = null;

	/** Format: date-time */
	public ?string $PeriodEnd = null;
	public ?string $Project = null;
	public bool $RotRutActivated;
	public ?AmountView $RotRutAmount = null;
	public ?AmountView $RotRutMaterialCostAmount = null;

	/** Format: int32 */
	public int $RotRutHours;
	public RotRutTypeView $RotRutType;
	public RecordTypeView $RecordType;
	public bool $VatIsIncluded;
	public bool $Hidden;
	public ?string $ExternalReference = null;
	public ?AmountView $TotalIncVAT = null;
	public ?AmountView $TotalExclVATNoDiscount = null;
	public ?AmountView $TotalExclVAT = null;
}
