<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class IntermediatorTypeView extends DataTransferObject
{
	/**
	 * 0: ITELLA
	 * 1: TIETOSE
	 * 2: LOGICA
	 * 3: PROCEEDO
	 * 4: HUSERA
	 * 5: BASWARE
	 * 6: EDB
	 * 7: STRALFORS1
	 * 8: LIAISON_FI
	 * 9: EXPERT
	 * 10: ESSESESS
	 * 11: HANDSESS
	 * 12: DABASESS
	 * 13: SWEDSESS
	 * 14: NDEASESS
	 * 15: INEXCHANGE
	 * 17: SCANCLOUD
	 * 18: PAGERO
	 * 19: CREDIFLOW
	 * 20: PEPPOL
	 * 21: COMPELLO
	 * 22: LOGIQ
	 * 23: APIX
	 * 24: AKSESSPUNKT
	 * 25: FININVOICE
	 * -1: Unknown
	 */
	public int $value;
}
