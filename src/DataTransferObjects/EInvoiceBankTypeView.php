<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class EInvoiceBankTypeView extends DataTransferObject
{
	/**
	 * 0: OEB
	 * 1: SEB
	 * 2: SHB
	 * 3: SKB
	 * 4: FSPA
	 * 5: NB
	 * 6: LFB
	 * 7: FINN
	 * 9: ICA
	 * 10: SYD
	 * 11: DNB
	 * 12: SBF
	 * 14: AAB
	 * 15: DBF
	 * 16: SEBF
	 * 17: SHBF
	 * 18: NBF
	 * 19: FRX
	 * 20: MARG
	 * -1: Unknown
	 */
	public int $value;
}
