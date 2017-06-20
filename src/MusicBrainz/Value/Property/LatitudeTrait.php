<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\Latitude;

/**
 * Provides a getter for a latitude.
 */
trait LatitudeTrait
{
    /**
     * The latitude
     *
     * @var null|Latitude
     */
    private $latitude;

    /**
     * Returns the latitude.
     *
     * @return Latitude
     */
    public function getLatitude(): Latitude
    {
        return $this->latitude;
    }

}
