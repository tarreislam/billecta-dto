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
	public ?SieKPTYPTypeView $SieKPTYP = null;
	public FiscalYearTypeView $FiscalYear;

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
	public BookKeepingMethodView $BookKeepingMethod;

	/** Format: int32 */
	public ?int $LockPreviousPeriodsAtDay = null;
}
