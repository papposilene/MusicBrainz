<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\PlaceType;

/**
 * Provides a getter for the type of place.
 */
trait PlaceTypeTrait
{
    /**
     * A type of place
     *
     * @var PlaceType
     */
    private $placeType;

    /**
     * Returns type of place.
     *
     * @return PlaceType
     */
    public function getPlaceType(): PlaceType
    {
        return $this->placeType;
    }
}
