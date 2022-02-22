<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CreditorKycFormView extends DataTransferObject
{
	public ?CreditorKycFormCompanyView $Company = null;
	public ?CreditorKycFormContactView $Contact = null;
	public bool $IsTaxableInUS;
	public bool $IsFinancialInstitute;
	public bool $IsActiveNonFinancialInstitute;
	public bool $IsAnyOwnerUsPersons;
	public ?array $UsPersons = null;
	public bool $IsManagingCash;
	public ?string $ManagingCashPurpose = null;
	public ?string $ManagingCashYearlyRevenue = null;
	public bool $IsManagingCurrenyExchanges;
	public ?string $ManagingCurrenyExchangesPurpose = null;
	public ?CreditorKycFormBusinessCategoryView $BusinessCategory = null;
	public bool $HasNoOwnersWithMoreThan25Percent;
	public ?array $OwnersWithMoreThan25Percent = null;
	public bool $HasNoBeneficialOwners;
	public ?array $BeneficialOwners = null;
	public bool $IsAnyonePEP;
	public bool $HasAnyoneBusinessRelationWithOtherPEP;
}
