<?php

namespace Tarre\Billecta\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class RotRutTypeView extends DataTransferObject
{
	/**
	 * 0: Construction
	 * 1: Electricity
	 * 2: GlassMetalWork
	 * 3: GroundDrainageWork
	 * 4: Masonry
	 * 5: PaintingWallpapering
	 * 6: Hvac
	 * 100: BabySitting
	 * 101: Moving
	 * 102: ITServices
	 * 103: TextileClothing
	 * 104: PersonalCare
	 * 105: SnowPlowing
	 * 106: Cleaning
	 * 107: Gardening
	 * 108: WhiteGoods
	 * -1: Unknown
	 */
	public int $value;
}
