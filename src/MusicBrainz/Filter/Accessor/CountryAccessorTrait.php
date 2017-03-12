<?php

namespace MusicBrainz\Filter\Accessor;

use MusicBrainz\Value\Country;

/**
 * Provides accessors for the country.
 */
trait CountryAccessorTrait
{
    use AccessorTrait;

    /**
     * Returns the country.
     *
     * @return null|Country
     */
    public function getCountry(): ?Country
    {
        return $this->getFilterValue('country');
    }

    /**
     * Sets the country.
     *
     * @param null|Country $country A country
     *
     * @return self
     */
    public function setCountry(?Country $country): self
    {
        return $this->setFilterValue('country', $country);
    }
}
