<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class OutgoingPaymentView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $CreditorPublicId,
		/**
		 * 0: BankGiro
		 * 1: PlusGiro
		 * 2: BankAccount
		 * 4: Iban
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $ReceivingPaymentMethod,
		public bool $IsSalaryPayment,
		/** Format: guid */
		public string $PaymentPublicId,
		/**
		 * 0: SUPP
		 * 1: CORT
		 * 2: INTC
		 * 3: TREA
		 * 4: SALA
		 * 5: TAXS
		 * 6: PENS
		 * @var string|int
		 */
		public string|int $Category,
		/**
		 * 0: SHAR
		 * 1: CRED
		 * 2: DEBT
		 * 3: SLEV
		 * @var string|int
		 */
		public string|int $ChargeBearer,
		/**
		 * 0: NURG
		 * 1: URGP
		 * 2: SEPA
		 * @var string|int
		 */
		public string|int $PaymentCodeType,
		/**
		 * 0: TRF
		 * 1: CHK
		 * @var string|int
		 */
		public string|int $PainPaymentMethodType,
		/**
		 * 0: BankGiro
		 * 1: PlusGiro
		 * 2: BankAccount
		 * 3: IBAN
		 * -1: Unknown
		 * @var string|int|null
		 */
		public string|int|null $SenderPaymentMethod = null,
		public ?string $SendingBankgiroNo = null,
		public ?string $ReceivingBankgiroNo = null,
		public ?string $ReceivingPlusgiroNo = null,
		public ?string $ReceivingClearingNo = null,
		public ?string $ReceivingAccountNo = null,
		public ?string $ReceiverName = null,
		/** Format: date-time */
		public ?string $PaymentDate = null,
		public ?AmountView $Amount = null,
		public ?string $Reference = null,
		/** Format: guid */
		public ?string $BankIdReferenceToken = null,
		/** Format: int32 */
		public ?int $SenderPlusgiro = null,
		/**
		 * 0: Unknown
		 * 1: Bankgiro
		 * 2: P27
		 * @var string|int|null
		 */
		public string|int|null $OutgoingPaymentType = null,
		public ?string $ReceiverAddress = null,
		public ?string $ReceiverCoAddress = null,
		public ?string $ReceiverZipCode = null,
		public ?string $ReceiverCity = null,
		/** Format: guid */
		public ?string $TransactionFilePublicId = null,
		public ?string $ReceiverIban = null,
		public ?string $ReceiverBic = null,
		public ?string $Comment = null,
		public ?string $ReceiverCountryCode = null,
		public ?string $ReceiverOrgNo = null,
		public ?string $SenderOrgNo = null,
		public ?string $SenderName = null,
		public ?string $SenderBic = null,
		public ?string $SenderIban = null,
	) {
	}
}
