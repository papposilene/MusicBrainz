<?php

namespace MusicBrainz;

/**
 * A country
 *
 * @link https://wiki.musicbrainz.org/Release_Country
 */
class Country
{
    /**
     * The country code
     *
     * @var string
     */
    private $country;

    /**
     * Constructs a country.
     *
     * @param string $country A country code
     */
    public function __construct(string $country)
    {
        $this->country = (strlen($country) === 2)
            ? strtoupper($country)
            : 'XU';
    }

    /**
     * Returns the country code.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->country;
    }
}
