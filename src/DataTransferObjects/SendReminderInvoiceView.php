<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class SendReminderInvoiceView extends Data
{
	public function __construct(
		public ?string $InvoiceActionPublicId = null,
		/**
		 * 0: Email
		 * 1: Mail
		 * 2: Manually
		 * 3: SMS
		 * 4: EInvoice
		 * 5: Kivra
		 * 6: Avy
		 * -1: Unknown
		 * @var string|int|null
		 */
		public string|int|null $DeliveryMethod = null,
		public ?AmountView $ReminderFee = null,
		/** Format: byte */
		public ?string $Stream = null,
		public ?string $Url = null,
		/** Format: int32 */
		public ?int $PaymentTermsInDays = null,
	) {
	}
}
