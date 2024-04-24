<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class CreditorKycFormView extends Data
{
	public function __construct(
		public bool $IsTaxableInUS,
		public bool $IsFinancialInstitute,
		public bool $IsActiveNonFinancialInstitute,
		public bool $IsAnyOwnerUsPersons,
		public bool $IsManagingCash,
		public bool $IsManagingCurrenyExchanges,
		public bool $HasNoOwnersWithMoreThan25Percent,
		public bool $HasNoBeneficialOwners,
		public bool $IsAnyonePEP,
		public bool $HasAnyoneBusinessRelationWithOtherPEP,
		public ?CreditorKycFormCompanyView $Company = null,
		public ?CreditorKycFormContactView $Contact = null,
		public ?array $UsPersons = null,
		public ?string $ManagingCashPurpose = null,
		public ?string $ManagingCashYearlyRevenue = null,
		public ?string $ManagingCurrenyExchangesPurpose = null,
		public ?CreditorKycFormBusinessCategoryView $BusinessCategory = null,
		public ?array $OwnersWithMoreThan25Percent = null,
		public ?array $BeneficialOwners = null,
	) {
	}
}
