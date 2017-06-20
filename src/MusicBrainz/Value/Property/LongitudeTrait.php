<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\Longitude;

/**
 * Provides a getter for a longitude.
 */
trait LongitudeTrait
{
    /**
     * The longitude
     *
     * @var null|Longitude
     */
    private $longitude;

    /**
     * Returns the longitude.
     *
     * @return Longitude
     */
    public function getLongitude(): Longitude
    {
        return $this->longitude;
    }

}
