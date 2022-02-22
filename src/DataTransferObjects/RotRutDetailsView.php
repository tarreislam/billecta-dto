<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class RotRutDetailsView extends DataTransferObject
{
	public ?string $ResidenceAssociationOrgNo = null;
	public ?string $PropertyDesignation = null;
	public ?array $Persons = null;
	public ?array $Customers = null;
}
