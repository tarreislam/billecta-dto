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
	public ?IntermediatorTypeView $Intermediator = null;
}
