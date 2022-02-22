<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class UpdateAddressActionView extends DataTransferObject
{
	public ?string $ActionPublicId = null;
	public ?string $Name = null;
	public ?string $Attention = null;
	public ?string $CareOf = null;
	public ?string $Address = null;
	public ?string $Address2 = null;
	public ?string $ZipCode = null;
	public ?string $Email = null;
	public ?string $City = null;
	public ?string $Phone = null;
	public ?string $OrgNo = null;
	public ?string $GLN = null;

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
	 */
	public ?int $Intermediator = null;
}
