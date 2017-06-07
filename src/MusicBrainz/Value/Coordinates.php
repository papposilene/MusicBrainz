<?php

namespace MusicBrainz\Value;

/**
 * The latitude and longitude describe the location of the place using geographic coordinates.
 *
 * @link https://musicbrainz.org/doc/Place
 */
class Coordinates
{
    /**
     * The latitude
     *
     * @var null|float
     */
    private $latitude;

    /**
     * The longitude
     *
     * @var null|float
     */
    private $longitude;

    /**
     * Constructs the coordinates.
     *
     * @param array $coordinates The coordinates
     */
    public function __construct(array $coordinates = [])
    {
        $this->latitude = isset($coordinates['latitude'])
            ? (float) $coordinates['latitude']
            : null;

        $this->longitude = isset($coordinates['longitude'])
            ? (float) $coordinates['longitude']
            : null;
    }

    /**
     * Returns the coordinates as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return (!isNull($this->latitude) && !isNull($this->longitude))
            ? $this->latitude . ', ' . $this->longitude
            : '';
    }
}
