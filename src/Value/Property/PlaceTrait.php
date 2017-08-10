<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\Place;

/**
 * Provides a getter for a place.
 */
trait PlaceTrait
{
    /**
     * The place number
     *
     * @var Place
     */
    public $place;

    /**
     * Returns the place.
     *
     * @return Place
     */
    public function getPlace(): Place
    {
        return $this->place;
    }

}
