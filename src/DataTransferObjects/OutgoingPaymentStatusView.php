<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class OutgoingPaymentStatusView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $PaymentPublicId,
		/** Format: guid */
		public string $CreditorPublicId,
		public bool $IsSalaryPayment,
		/** Format: date-time */
		public string $PaymentDate,
		/**
		 * 0: Queued
		 * 1: Processing
		 * 2: Succeded
		 * 3: Failed
		 * 4: Aborted
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $Status,
		public ?string $SendingBankgiroNo = null,
		public ?string $ReceivingBankgiroNo = null,
		public ?string $ReceivingPlusgiroNo = null,
		public ?string $ReceivingClearingNo = null,
		public ?string $ReceivingAccountNo = null,
		public ?string $ReceiverName = null,
		public ?AmountView $Amount = null,
		/** Format: date-time */
		public ?string $VerificationDate = null,
		public ?string $Reference = null,
		public ?FileView $File = null,
		public ?string $Comment = null,
	) {
	}
}
