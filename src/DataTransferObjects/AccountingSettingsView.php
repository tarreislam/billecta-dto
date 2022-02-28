<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class AccountingSettingsView extends DataTransferObject
{
	/** Format: guid */
	public string $CreditorPublicId;
	public ?string $VoucherSeries = null;
	public bool $CostCenterIsRequired;
	public bool $ProjectIsRequired;
	public bool $AccrualIsEnabled;
	public bool $DisableBookkeepingOverPayments;
	public bool $DisableBookkeepingUnmatchedPayments;
	public bool $UsageOfUnmatchedPaymentIsBookedOnIncomingPaymentDate;
	public bool $RestingVatIsEnabled;
	public bool $FractionaryRevenuePeriodIsEnabled;

	/**
	 * 0: BAS95
	 * 1: BAS96
	 * 2: EUBAS97
	 * 3: NE2007
	 * -1: Unknown
	 * @var string|int|null
	 */
	public $SieKPTYP = null;

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
	public $FiscalYear;

	/** Format: date-time */
	public ?string $ExtendedFirstFiscalYearStartDate = null;
	public ?array $Accounts = null;
	public ?string $DefaultSalesAccount = null;
	public ?string $DefaultBankgiroPaymentCode = null;
	public ?string $DefaultFinancialPaymentCode = null;
	public ?string $DefaultAutogiroPaymentCode = null;
	public ?string $DefaultSwishPaymentCode = null;
	public ?string $DefaultCreditCardPaymentCode = null;
	public ?string $DefaultCamtPaymentCode = null;
	public ?string $DefaultSettlingOverpaymentPaymentCode = null;
	public ?string $DefaultCreditingPaymentCode = null;

	/**
	 * 0: InvoiceMethod
	 * 1: CashMethod
	 * -1: Unknown
	 * @var string|int
	 */
	public $BookKeepingMethod;

	/** Format: int32 */
	public ?int $LockPreviousPeriodsAtDay = null;
}
