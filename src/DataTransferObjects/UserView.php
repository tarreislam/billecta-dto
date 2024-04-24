<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\LaravelData\Data;

class UserView extends Data
{
	public function __construct(
		/** Format: guid */
		public string $UserPublicId,
		/**
		 * 0: SV
		 * 1: EN
		 * 2: FI
		 * @var string|int
		 */
		public string|int $Language,
		public bool $PasswordExpired,
		public bool $PasswordNeverExpires,
		public bool $IsEnabled,
		public bool $IsAdministrator,
		public bool $IsApiUser,
		public bool $CanManageCreditors,
		public bool $HideSelectCreditorDialog,
		public bool $HideSystemUpdates,
		public bool $HideLookupDialog,
		/** Format: date-time */
		public string $Created,
		public bool $HasAcceptedAgreements,
		public bool $ReceiveSystemUpdateNotification,
		public bool $TwoFactorBankIdAuthEnabled,
		public ?string $Username = null,
		public ?string $Email = null,
		public ?string $FullName = null,
		public ?string $OrgNo = null,
		public ?string $Password = null,
		public ?array $Rights = null,
		/** Format: guid */
		public ?string $ActiveCreditorPublicId = null,
		/** Format: date-time */
		public ?string $LastLogin = null,
	) {
	}
}
