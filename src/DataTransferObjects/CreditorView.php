<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class CreditorView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $CreditorPublicId,
		public bool $IsEnabled,
		public bool $UseCentRounding,
		public bool $UsesClientFundForInvoicing,
		public ?string $OrgNo = null,
		public ?string $Name = null,
		public ?CreditorBankInfoView $CreditorBankInfo = null,
		public ?string $Attention = null,
		public ?string $CareOf = null,
		public ?string $Address = null,
		public ?string $Address2 = null,
		public ?string $ZipCode = null,
		public ?string $City = null,
		public ?string $CountryCode = null,
		public ?string $Phone = null,
		public ?string $VatNumber = null,
		public ?string $Residence = null,
		public ?bool $ApprovedCompanyTax = null,
		public ?bool $GiveAllUsersFullRightsOnCreditor = null,
		public ?string $GLN = null,
		public ?CreditorContactView $CreditorContact = null,
		public ?CreditorClaimsContactView $CreditorClaimsContact = null,
		public ?CreditorSignatoryContactView $CreditorSignatoryContact = null,
		public ?CreditorInvoiceAddressView $CreditorInvoiceAddress = null,
		public ?string $NextInvoiceNumber = null,
		public ?string $LogoURL = null,
	) {
	}
}
