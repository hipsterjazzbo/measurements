<?php namespace Measurements\Quantities;

use Measurements\Unit;
use Measurements\Measurement;
use Measurements\Units\UnitIlluminance;
use Measurements\Exceptions\UnitException;

/**
 * The `Illuminance` class represents a specific quantities of illuminance.
 *
 * @method static Illuminance lux(float $value)
 */
class Illuminance extends Measurement {

	/**
	 * Initializes a new illuminance measurement with a specified floating-point value and unit.
	 *
	 * @param double $value The measurement value.
	 * @param Unit   $unit  The unit of measure.
	 *
	 * @throws \Measurements\Exceptions\UnitException
	 */
	public function __construct($value, Unit $unit)
	{
		if (!$unit instanceof UnitIlluminance) {
			throw new UnitException("Attempt to create a illuminance measurement from an invalid unit [$unit]!");
		}

		parent::__construct($value, $unit);
	}

}
