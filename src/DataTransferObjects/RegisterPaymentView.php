<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class RegisterPaymentView extends Data
{
	public function __construct(
		/** Format: date-time */
		public string $Date,
		public float $WriteOffVat,
		/**
		 * 0: None
		 * 1: AsCurrencyDifference
		 * 2: AsOverPayments
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $OvershootingAmountHandling,
		public ?string $ActionPublicId = null,
		public ?AmountView $Amount = null,
		public ?AmountView $WriteOff = null,
		public ?string $Comment = null,
		public ?string $OverrideWriteOffAccount = null,
		public ?string $PaymentMeanCode = null,
		public ?string $PaymentReferenceText = null,
	) {
	}
}
