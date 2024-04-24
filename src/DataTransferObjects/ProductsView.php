<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class ProductsView extends Data
{
	/** @var ProductView[] */
	public array $ProductView;


	public function __construct()
	{
	}
}
