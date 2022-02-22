<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class UserView extends DataTransferObject
{
	public ?string $Username = null;
	public ?string $Email = null;

	/** Format: guid */
	public string $UserPublicId;
	public ?string $FullName = null;

	/**
	 * 0: SV
	 * 1: EN
	 * 2: FI
	 * @var string|int
	 */
	public $Language;
	public bool $PasswordExpired;
	public bool $PasswordNeverExpires;
	public ?string $Password = null;
	public bool $IsEnabled;
	public ?array $Rights = null;
	public bool $IsAdministrator;
	public bool $IsApiUser;
	public bool $CanManageCreditors;
	public bool $HideSelectCreditorDialog;
	public bool $HideSystemUpdates;
	public bool $HideLookupDialog;

	/** Format: guid */
	public ?string $ActiveCreditorPublicId = null;

	/** Format: date-time */
	public ?string $LastLogin = null;

	/** Format: date-time */
	public string $Created;
	public bool $HasAcceptedAgreements;
	public bool $ReceiveSystemUpdateNotification;
}
