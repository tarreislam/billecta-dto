<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class PasswordView extends DataTransferObject
{
	public ?string $Password = null;
}
