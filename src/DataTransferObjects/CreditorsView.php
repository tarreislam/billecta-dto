<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CreditorsView extends DataTransferObject
{
	/** @var CreditorView[] */
	public array $CreditorView;
}
