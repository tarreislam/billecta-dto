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

	/**
	 * 0: Private
	 * 1: Company
	 * -1: Undefined
	 * @var string|int
	 */
	public $DebtorType = null;

	/**
	 * 0: ITELLA
	 * 1: TIETOSE
	 * 2: LOGICA
	 * 3: PROCEEDO
	 * 4: HUSERA
	 * 5: BASWARE
	 * 6: EDB
	 * 7: STRALFORS1
	 * 8: LIAISON_FI
	 * 9: EXPERT
	 * 10: ESSESESS
	 * 11: HANDSESS
	 * 12: DABASESS
	 * 13: SWEDSESS
	 * 14: NDEASESS
	 * 15: INEXCHANGE
	 * 17: SCANCLOUD
	 * 18: PAGERO
	 * 19: CREDIFLOW
	 * 20: PEPPOL
	 * 21: COMPELLO
	 * 22: LOGIQ
	 * 23: APIX
	 * 24: AKSESSPUNKT
	 * 25: FININVOICE
	 * -1: Unknown
	 * @var string|int
	 */
	public $Intermediator = null;

	/**
	 * 0: OEB
	 * 1: SEB
	 * 2: SHB
	 * 3: SKB
	 * 4: FSPA
	 * 5: NB
	 * 6: LFB
	 * 7: FINN
	 * 9: ICA
	 * 10: SYD
	 * 11: DNB
	 * 12: SBF
	 * 14: AAB
	 * 15: DBF
	 * 16: SEBF
	 * 17: SHBF
	 * 18: NBF
	 * 19: FRX
	 * 20: MARG
	 * -1: Unknown
	 * @var string|int
	 */
	public $EInvoiceBank = null;
	public ?string $Notes = null;
	public ?DebtorSelfInvoiceInfoView $DebtorSelfInvoiceInfo = null;
	public ?DebtorDefaultActionConfigView $DefaultActionConfig = null;
	public ?DebtorAutogiroView $Autogiro = null;
	public ?array $CreditCards = null;

	/** Format: date-time */
	public string $Created;
}
