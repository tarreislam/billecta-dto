<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class DebtorView extends DataTransferObject
{
	/** Format: guid */
	public string $DebtorPublicId;

	/** Format: guid */
	public string $CreditorPublicId;
	public ?string $DebtorExternalId = null;
	public ?string $OrgNo = null;
	public ?string $Name = null;
	public ?string $Attention = null;
	public ?string $CareOf = null;
	public ?string $Address = null;
	public ?string $Address2 = null;
	public ?string $ZipCode = null;
	public ?string $City = null;
	public ?string $CountryCode = null;
	public ?string $CitizenshipCountryCode = null;
	public ?string $Phone = null;
	public ?string $Email = null;
	public ?string $ContactName = null;
	public ?string $ContactEmail = null;
	public ?string $VatNumber = null;
	public ?string $DebtorNo = null;
	public ?string $GLN = null;
	public ?bool $IsActive = null;
	public bool $ProtectedIdentity;
	public ?DebtorTypeView $DebtorType = null;
	public ?IntermediatorTypeView $Intermediator = null;
	public ?EInvoiceBankTypeView $EInvoiceBank = null;
	public ?string $Notes = null;
	public ?DebtorSelfInvoiceInfoView $DebtorSelfInvoiceInfo = null;
	public ?DebtorDefaultActionConfigView $DefaultActionConfig = null;
	public ?DebtorAutogiroView $Autogiro = null;
	public ?array $CreditCards = null;

	/** Format: date-time */
	public string $Created;
}
