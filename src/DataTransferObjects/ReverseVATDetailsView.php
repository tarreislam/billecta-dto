<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ReverseVATDetailsView extends DataTransferObject
{
	public bool $ReverseVATActivated;
	public ?string $ReceiverVATNumber = null;
}
