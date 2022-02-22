<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class OverpaymentDetailsView extends DataTransferObject
{
	public ActionTypeView $ActionType;
	public ?string $ActionPublicId = null;
	public ?string $InvoiceNumber = null;
	public ?string $UsedOnActionPublicId = null;
}
