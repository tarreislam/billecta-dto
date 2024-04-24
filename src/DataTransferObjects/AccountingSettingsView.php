<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class AccountingSettingsView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $CreditorPublicId,
		public bool $CostCenterIsRequired,
		public bool $ProjectIsRequired,
		public bool $AccrualIsEnabled,
		public bool $DisableBookkeepingOverPayments,
		public bool $DisableBookkeepingUnmatchedPayments,
		public bool $UsageOfUnmatchedPaymentIsBookedOnIncomingPaymentDate,
		public bool $RestingVatIsEnabled,
		public bool $FractionaryRevenuePeriodIsEnabled,
		/**
		 * 0: CalendarYear
		 * 1: FebToJan
		 * 2: MarToFeb
		 * 3: AprToMar
		 * 4: MayToApr
		 * 5: JunToMay
		 * 6: JulToJun
		 * 7: AugToJul
		 * 8: SepToAug
		 * 9: OctToSep
		 * 10: NovToOct
		 * 11: DecToNov
		 * @var string|int
		 */
		public string|int $FiscalYear,
		/**
		 * 0: InvoiceMethod
		 * 1: CashMethod
		 * -1: Unknown
		 * @var string|int
		 */
		public string|int $BookKeepingMethod,
		public ?string $VoucherSeries = null,
		/**
		 * 0: BAS95
		 * 1: BAS96
		 * 2: EUBAS97
		 * 3: NE2007
		 * -1: Unknown
		 * @var string|int|null
		 */
		public string|int|null $SieKPTYP = null,
		/** Format: date-time */
		public ?string $ExtendedFirstFiscalYearStartDate = null,
		public ?array $Accounts = null,
		public ?string $DefaultSalesAccount = null,
		public ?string $DefaultBankgiroPaymentCode = null,
		public ?string $DefaultFinancialPaymentCode = null,
		public ?string $DefaultAutogiroPaymentCode = null,
		public ?string $DefaultSwishPaymentCode = null,
		public ?string $DefaultCreditCardPaymentCode = null,
		public ?string $DefaultIbanPaymentCode = null,
		public ?string $DefaultBankAccountPaymentCode = null,
		public ?string $DefaultPlusgiroPaymentCode = null,
		public ?string $DefaultCamtPaymentCode = null,
		public ?string $DefaultSettlingOverpaymentPaymentCode = null,
		public ?string $DefaultCreditingPaymentCode = null,
		/** Format: int32 */
		public ?int $LockPreviousPeriodsAtDay = null,
		public ?array $ExcludeCostCenterAndProjectForAccounts = null,
	) {
	}
}
