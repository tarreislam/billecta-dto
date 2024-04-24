<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class UnhandledPaymentView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $CreditorPublicId,
		/** Format: guid */
		public string $UnhandledPaymentPublicId,
		/** Format: date-time */
		public string $PaymentDate,
		/**
		 * 0: UnmatchedPayment
		 * 1: OverPayment
		 * 2: ManualBalance
		 * 3: BalanceFromInvoice
		 * @var string|int
		 */
		public string|int $UnhandledPaymentType,
		/**
		 * 0: Unhandled
		 * 1: UsedOnInvoice
		 * 2: UsedOnInvoiceInOtherCreditor
		 * 4: Deleted
		 * 5: RepaymentPending
		 * 6: Repaid
		 * @var string|int
		 */
		public string|int $State,
		public ?string $CreditorName = null,
		public ?string $SenderName = null,
		public ?string $SenderAddress = null,
		public ?string $SenderZipCode = null,
		public ?string $SenderCity = null,
		public ?string $SenderCountryCode = null,
		public ?string $SenderOrgNo = null,
		public ?string $SenderBankgiroNo = null,
		/** Format: guid */
		public ?string $DebtorPublicId = null,
		public ?AmountView $Amount = null,
		public ?string $Reference = null,
		public ?string $CreatedBy = null,
		public ?OverpaymentDetailsView $OverpaymentDetails = null,
		public ?array $AdditionalInformations = null,
	) {
	}
}
