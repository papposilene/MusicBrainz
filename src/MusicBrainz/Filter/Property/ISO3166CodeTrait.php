<?php

namespace MusicBrainz\Filter\Property;

use MusicBrainz\Value\ISO3166Code;

/**
 * Provides accessors for an ISO 3166-1/2/3 code.
 */
trait ISO3166CodeTrait
{
    /**
     * The ISO 3166-1/2/3 code
     *
     * @var null|ISO3166Code
     */
    private $iso3166Code;

    /**
     * Returns the ISO 3166-1/2/3 code.
     *
     * @return null|ISO3166Code
     */
    public function getIso3166Code(): ?ISO3166Code
    {
        return $this->iso3166Code;
    }

    /**
     * Sets the ISO 3166-1/2/3 code.
     *
     * @param null|ISO3166Code $iso3166Code The ISO 3166-1/2/3 code
     *
     * @return self
     */
    public function setIso3166Code(?ISO3166Code $iso3166Code): self
    {
        $this->iso3166Code = $iso3166Code;

        return $this;
    }
}
