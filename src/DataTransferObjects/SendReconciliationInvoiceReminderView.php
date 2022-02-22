<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class SendReconciliationInvoiceReminderView extends DataTransferObject
{
	public ?string $ReconciliationInvoiceActionPublicId = null;
	public ?DeliveryMethodTypeView $DeliveryMethod = null;
	public ?AmountView $ReminderFee = null;
	public ?FileView $ReminderFile = null;
	public ?bool $SendWithColor = null;
	public ?bool $SendAsPriorityMail = null;
}
