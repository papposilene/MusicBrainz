<?php

namespace MusicBrainz\Value;

use MusicBrainz\Value;

/**
 * The latitude and longitude describe the location of the place using geographic coordinates.
 *
 * @link https://musicbrainz.org/doc/Place
 */
class Coordinates implements Value
{
    use Property\LatitudeTrait;
    use Property\LongitudeTrait;

    /**
     * Constructs the coordinates.
     *
     * @param array $coordinates The coordinates
     */
    public function __construct(array $coordinates = [])
    {
        $this->latitude  = new Latitude(isset($coordinates['latitude']) ? (float) $coordinates['latitude'] : null);
        $this->longitude = new Longitude(isset($coordinates['longitude']) ? (float) $coordinates['longitude'] : null);
    }

    /**
     * Returns the coordinates as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return (!empty((string) $this->getLatitude()) && !empty((string) $this->getLongitude()))
            ? $this->getLatitude() . ', ' . $this->getLongitude()
            : '';
    }
}
