<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CreditorKycFormBusinessCategoryView extends DataTransferObject
{
	public bool $IsRealEstateSalesCategory;
	public bool $IsRealEstateConstructionCategory;
	public bool $IsRestaurantCategory;
	public bool $IsCafeCategory;
	public bool $IsBrokerCategory;
	public bool $IsNightClubCategory;
	public bool $IsKioskCategory;
	public bool $IsOnlineGambilingCategory;
	public bool $IsCleaningCategory;
	public bool $IsTaxiCategory;
	public bool $IsBarberCategory;
	public bool $IsBettingShopCategory;
	public ?string $OtherCategory = null;
}
