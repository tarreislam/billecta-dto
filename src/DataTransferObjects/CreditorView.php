<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CreditorView extends DataTransferObject
{
	/** Format: guid */
	public string $CreditorPublicId;
	public ?string $OrgNo = null;
	public ?string $Name = null;
	public ?CreditorBankInfoView $CreditorBankInfo = null;
	public ?string $Attention = null;
	public ?string $CareOf = null;
	public ?string $Address = null;
	public ?string $Address2 = null;
	public ?string $ZipCode = null;
	public ?string $City = null;
	public ?string $CountryCode = null;
	public ?string $Phone = null;
	public ?string $VatNumber = null;
	public ?string $Residence = null;
	public ?bool $ApprovedCompanyTax = null;
	public ?bool $GiveAllUsersFullRightsOnCreditor = null;
	public ?string $GLN = null;
	public ?CreditorContactView $CreditorContact = null;
	public ?CreditorClaimsContactView $CreditorClaimsContact = null;
	public ?CreditorSignatoryContactView $CreditorSignatoryContact = null;
	public ?CreditorInvoiceAddressView $CreditorInvoiceAddress = null;
	public bool $IsEnabled;
	public ?string $NextInvoiceNumber = null;
	public ?string $LogoURL = null;
	public bool $UseCentRounding;
	public bool $UsesClientFundForInvoicing;

	/**
	 * 0: BankGiro
	 * 1: CAMT
	 * @var string|int
	 */
	public $PaymentReconciliationType;
}
