<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class SendReminderInvoiceView extends DataTransferObject
{
	public ?string $InvoiceActionPublicId = null;
	public ?DeliveryMethodTypeView $DeliveryMethod = null;
	public ?AmountView $ReminderFee = null;

	/** Format: byte */
	public ?string $Stream = null;
	public ?string $Url = null;

	/** Format: int32 */
	public ?int $PaymentTermsInDays = null;
}
