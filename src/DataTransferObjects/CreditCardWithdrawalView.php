<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CreditCardWithdrawalView extends DataTransferObject
{
	public bool $CreditCardWithdrawalEnabled;
}
