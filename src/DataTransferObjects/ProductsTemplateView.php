<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ProductsTemplateView extends DataTransferObject
{
	/** Format: guid */
	public string $CreditorPublicId;

	/** Format: int32 */
	public ?int $DefaultSalesAccount = null;

	/** Format: int32 */
	public ?int $DefaultSalesEUAccount = null;

	/** Format: int32 */
	public ?int $DefaultSalesEUVATAccount = null;

	/** Format: int32 */
	public ?int $DefaultSalesNonEUAccount = null;

	/** Format: int32 */
	public ?int $DefaultPurchaseEUAccount = null;

	/** Format: int32 */
	public ?int $DefaultPurchaseEUVATAccount = null;

	/** Format: int32 */
	public ?int $DefaultPurchaseNonEUAccount = null;
	public float $DefaultSalesVAT;
	public ?string $DefaultSalesUnits = null;

	/** Format: int32 */
	public ?int $DefaultPurchaseAccount = null;

	/** Format: int32 */
	public ?int $DefaultVATAccount = null;

	/** Format: int32 */
	public ?int $DefaultPurchaseVATAccount = null;

	/**
	 * 0: Service
	 * 1: Commodity
	 * 2: Package
	 * 3: VAT
	 * -1: Unknown
	 */
	public int $DefaultProductType;
}
