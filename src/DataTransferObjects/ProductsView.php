<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ProductsView extends DataTransferObject
{
	/** @var ProductView[] */
	public array $ProductView;
}
