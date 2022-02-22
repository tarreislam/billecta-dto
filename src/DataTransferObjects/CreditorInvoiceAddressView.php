<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CreditorInvoiceAddressView extends DataTransferObject
{
	public ?string $Address = null;
	public ?string $Address2 = null;
	public ?string $ZipCode = null;
	public ?string $City = null;
	public ?string $CountryCode = null;
	public ?string $Email = null;
	public DeliveryMethodTypeView $DeliveryMethod;
}
