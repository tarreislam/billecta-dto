<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class CreditorsView extends Data
{
	/** @var CreditorView[] */
	public array $CreditorView;


	public function __construct()
	{
	}
}
