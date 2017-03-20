<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\Country;

/**
 * Provides a getter for the country.
 */
trait CountryTrait
{
    /**
     * The artist's country
     *
     * @var Country
     */
    private $country;

    /**
     * Returns the artist's country.
     *
     * @return Country
     */
    public function getCountry(): Country
    {
        return $this->country;
    }
}
