<?php

namespace MusicBrainz\Filter\Accessor;

use MusicBrainz\Value\Country;

/**
 * Provides accessors for the country.
 */
trait CountryAccessorTrait
{
    /**
     * The country
     *
     * @var Country
     */
    private $country;

    /**
     * Returns the country.
     *
     * @return Country
     */
    public function getCountry(): Country
    {
        return $this->country;
    }

    /**
     * Sets the country.
     *
     * @param Country $country The country
     *
     * @return self
     */
    public function setCountry(Country $country): self
    {
        $this->country = $country;

        return $this;
    }


}
