<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\Coordinates;

/**
 * Provides a getter for the coordinates.
 */
trait CoordinatesTrait
{
    /**
     * The coordinates
     *
     * @var Coordinates
     */
    private $coordinates;

    /**
     * Returns the coordinates.
     *
     * @return Coordinates
     */
    public function getCoordinates(): Coordinates
    {
        return $this->coordinates;
    }
}
