<?php

namespace MusicBrainz\Filter\Property;

use MusicBrainz\Value\Country;

/**
 * Provides accessors for the country.
 */
trait CountryTrait
{
    /**
     * The country
     *
     * @var null|Country
     */
    private $country;

    /**
     * Returns the country.
     *
     * @return null|Country
     */
    public function getCountry(): ?Country
    {
        return $this->country;
    }

    /**
     * Sets the country.
     *
     * @param null|Country $country The country
     *
     * @return self
     */
    public function setCountry(?Country $country): self
    {
        $this->country = $country;

        return $this;
    }


}
