<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class FiscalYearTypeView extends DataTransferObject
{
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
	 */
	public int $value;
}
