<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class SendReminderInvoiceView extends DataTransferObject
{
	public ?string $InvoiceActionPublicId = null;

	/**
	 * 0: Email
	 * 1: Mail
	 * 2: Manually
	 * 3: SMS
	 * 4: EInvoice
	 * 5: Kivra
	 * -1: Unknown
	 * @var string|int
	 */
	public $DeliveryMethod = null;
	public ?AmountView $ReminderFee = null;

	/** Format: byte */
	public ?string $Stream = null;
	public ?string $Url = null;

	/** Format: int32 */
	public ?int $PaymentTermsInDays = null;
}
