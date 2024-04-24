<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class DebtCollectionActionInvoiceView extends Data
{
	public function __construct(
		/** Format: date-time */
		public string $InvoiceDate,
		/** Format: date-time */
		public string $DueDate,
		/** Format: int32 */
		public int $PaymentTermsInDays,
		/** Format: int32 */
		public int $InterestTermsInDays,
		public float $InterestPercentage,
		/**
		 * 0: Fixed
		 * 1: AboveEffectiveReference
		 * 2: NoInterest
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $InterestType,
		public ?string $InvoiceNumber = null,
		public ?string $InvoiceDecription = null,
		public ?string $OurReference = null,
		public ?string $YourReference = null,
		public ?string $Name = null,
		public ?string $Address = null,
		public ?string $Address2 = null,
		public ?string $ZipCode = null,
		public ?string $City = null,
		public ?string $CountryCode = null,
		public ?AmountView $InvoicedAmount = null,
		public ?FileView $InvoiceFile = null,
		public ?string $OCR = null,
	) {
	}
}
