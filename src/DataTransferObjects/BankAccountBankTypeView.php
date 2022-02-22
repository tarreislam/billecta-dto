<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class BankAccountBankTypeView extends DataTransferObject
{
	/**
	 * 0: OEB
	 * 2: SHB
	 * 3: ICA
	 * 4: LFB
	 * 5: NB
	 * 6: SBAB
	 * 7: SEB
	 * 8: SKB
	 * 9: SYD
	 * 10: FSPA
	 * 11: FSPASB
	 * -1: Unknown
	 */
	public int $value;
}
