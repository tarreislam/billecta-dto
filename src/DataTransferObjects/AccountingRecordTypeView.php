<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class AccountingRecordTypeView extends DataTransferObject
{
	/**
	 * ProductSales: ProductSales
	 * ProductSalesWithReverseVAT: ProductSalesWithReverseVAT
	 * RotRutDiscount: RotRutDiscount
	 * PaymentToBankAccount: PaymentToBankAccount
	 * OverPaymentToBankAccount: OverPaymentToBankAccount
	 * CentRounding: CentRounding
	 * Interest: Interest
	 * ProductSalesEU: ProductSalesEU
	 * ProductSalesEUVAT: ProductSalesEUVAT
	 * ProductSalesNonEU: ProductSalesNonEU
	 * SupplierPaymentFromBankAccount: SupplierPaymentFromBankAccount
	 * SupplierPurchaseDebt: SupplierPurchaseDebt
	 * SupplierPurchaseEU: SupplierPurchaseEU
	 * SupplierPurchaseEUVAT: SupplierPurchaseEUVAT
	 * SupplierPurchaseNonEU: SupplierPurchaseNonEU
	 * CurrencyDifference: CurrencyDifference
	 * FinanceCostNoRecourse: FinanceCostNoRecourse
	 * SelfInvoiceDebt: SelfInvoiceDebt
	 * SelfInvoiceDebtVAT: SelfInvoiceDebtVAT
	 * SelfInvoicePaymentFromBankAccount: SelfInvoicePaymentFromBankAccount
	 * SelfInvoiceCreditation: SelfInvoiceCreditation
	 * InvoiceSalesDebtRemoved: InvoiceSalesDebtRemoved
	 * WriteOff: WriteOff
	 * ReminderCostPayment: ReminderCostPayment
	 * Accrual: Accrual
	 * AdminsitrationCost: AdminsitrationCost
	 * InvoiceSalesDebtAdded: InvoiceSalesDebtAdded
	 * RestingVAT: RestingVAT
	 * FreightCost: FreightCost
	 * OverPaymentDeleted: OverPaymentDeleted
	 * UnmatchedPaymentToBankAccount: UnmatchedPaymentToBankAccount
	 * UnmatchedPaymentDeleted: UnmatchedPaymentDeleted
	 * FinanceCostWithRecourse: FinanceCostWithRecourse
	 * ClientFundDebt: ClientFundDebt
	 * NonPerformingLoanPurchase: NonPerformingLoanPurchase
	 * PurchasedNonPerformingLoanPayment: PurchasedNonPerformingLoanPayment
	 * ManualBalanceDeleted: ManualBalanceDeleted
	 * BalanceFromInvoiceDeleted: BalanceFromInvoiceDeleted
	 * DebtCollectionPaymentFee: DebtCollectionPaymentFee
	 * ProductSalesWithAdviceMethod: ProductSalesWithAdviceMethod
	 * BankAndTransactionCost: BankAndTransactionCost
	 * Unknown: Unknown
	 */
	public string $value;
}
