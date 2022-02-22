<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class AccountingSettingsAccountTypeView extends DataTransferObject
{
	/**
	 * 0: AdministrationCostAccount
	 * 1: FreightCostAccount
	 * 2: TradeDebtsAccount
	 * 3: TradeDebtsTaxReductionAccount
	 * 4: ShortTermDebtsAccount
	 * 5: CustomerAdvancedPaymentsAccount
	 * 6: UnmatchedPaymentsAccount
	 * 7: VATAccount
	 * 8: RoundingAccount
	 * 9: InterestAccount
	 * 10: FinancialCostsAccount
	 * 11: FinancialInstituteDebtAccount
	 * 12: SalesWithRotRutAccount
	 * 13: SalesWithReverseVATAccount
	 * 14: AccrualAccount
	 * 15: RevenueCorrectionAccount
	 * 16: AccountPayablesAccount
	 * 17: IncomingVATAccount
	 * 18: RestingVATAccount
	 * 19: CurrencyDifferenceLossesAccount
	 * 20: CurrencyDifferenceGainsAccount
	 * 21: WriteOffAccount
	 * 22: OtherOperatingIncomeAccount
	 * 23: BankAndTransactionCostAccount
	 * -1: Unknown
	 */
	public int $value;
}
