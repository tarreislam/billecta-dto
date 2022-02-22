<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class InstallmentPlanActionSubView extends DataTransferObject
{
	public ?string $ActionPublicId = null;

	/** Format: guid */
	public string $CreditorPublicId;

	/** Format: guid */
	public string $DebtorPublicId;
	public ?string $CreditorOrgNo = null;
	public ?string $CreditorName = null;
	public ?string $DebtorOrgNo = null;
	public ?string $DebtorName = null;
	public ?AmountView $CurrentAmount = null;
	public ?AmountView $InvoicedAmount = null;
	public InstallmentPlanActionStageTypeView $Stage;
	public ActionTypeView $ActionType;
	public DeliveryMethodTypeView $DeliveryMethod;

	/** Format: date-time */
	public string $Created;

	/** Format: date-time */
	public ?string $ClosedDate = null;

	/** Format: date-time */
	public ?string $AttestedDate = null;

	/** Format: date-time */
	public ?string $NextEventDate = null;
	public ?string $NextEvent = null;

	/** Format: date-time */
	public string $OriginalDueDate;

	/** Format: date-time */
	public string $OriginalInvoiceDate;
	public ?string $OriginalInvoiceNumber = null;
	public bool $IsPaused;
	public bool $IsCommented;
	public bool $IsDisputed;
	public DeliveryStatusTypeView $DeliveryStatus;
	public ?array $Files = null;
	public ?array $OCRs = null;
	public ?array $InvoiceNumbers = null;
	public LanguageTypeView $CommunicationLanguage;

	/** Format: int32 */
	public int $PaymentTermsInDays;
	public float $InterestPercentage;
}
