<?php
namespace MusicBrainz\Value\Property;

use MusicBrainz\Helper\ArrayAccess;
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

    /**
     * Sets the longitude by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setLongitudeFromArray(array $input): void
    {
        $this->longitude = is_null($longitude = ArrayAccess::getString($input, 'longitude'))
            ? new Longitude
            : new Longitude($longitude);
    }
}
