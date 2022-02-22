<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ProductView extends DataTransferObject
{
	/** Format: guid */
	public string $ProductPublicId;

	/** Format: guid */
	public string $CreditorPublicId;
	public ?string $ArticleNumber = null;
	public ?string $ProductExternalId = null;
	public ?string $Description = null;
	public ?string $Units = null;
	public bool $IsActive;
	public float $UnitPrice;
	public float $VAT;

	/** Format: int32 */
	public ?int $BookKeepingAccount = null;

	/** Format: int32 */
	public ?int $BookKeepingSalesEUAccount = null;

	/** Format: int32 */
	public ?int $BookKeepingSalesEUVATAccount = null;

	/** Format: int32 */
	public ?int $BookKeepingSalesNonEUAccount = null;

	/** Format: int32 */
	public ?int $BookKeepingPurchaseAccount = null;

	/** Format: int32 */
	public ?int $BookKeepingVATAccount = null;

	/** Format: int32 */
	public ?int $BookKeepingPurchaseVATAccount = null;
	public ProductTypeView $ProductType;
	public ?string $ConfigurationCode = null;
}
