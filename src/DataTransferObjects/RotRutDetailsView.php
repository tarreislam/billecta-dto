<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class RotRutDetailsView extends Data
{
	public function __construct(
		public ?string $ResidenceAssociationOrgNo = null,
		public ?string $PropertyDesignation = null,
		public ?array $Persons = null,
		public ?array $Customers = null,
	) {
	}
}
