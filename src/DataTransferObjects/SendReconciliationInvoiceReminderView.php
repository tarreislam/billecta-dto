<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class SendReconciliationInvoiceReminderView extends DataTransferObject
{
	public ?string $ReconciliationInvoiceActionPublicId = null;

	/**
	 * 0: Email
	 * 1: Mail
	 * 2: Manually
	 * 3: SMS
	 * 4: EInvoice
	 * 5: Kivra
	 * -1: Unknown
	 * @var string|int|null
	 */
	public $DeliveryMethod = null;
	public ?AmountView $ReminderFee = null;
	public ?FileView $ReminderFile = null;
	public ?bool $SendWithColor = null;
	public ?bool $SendAsPriorityMail = null;
}
