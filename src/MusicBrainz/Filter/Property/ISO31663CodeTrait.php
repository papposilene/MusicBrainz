<?php

namespace MusicBrainz\Filter\Property;

use MusicBrainz\Value\ISO31663Code;

/**
 * Provides accessors for an ISO 3166-3 code.
 */
trait ISO31663CodeTrait
{
    /**
     * The ISO 3166-3 code
     *
     * @var null|ISO31663Code
     */
    private $iso31663Code;

    /**
     * Returns the ISO 3166-3 code.
     *
     * @return null|ISO31663Code
     */
    public function getIso31663Code(): ?ISO31663Code
    {
        return $this->iso31663Code;
    }

    /**
     * Sets the ISO 3166-3 code.
     *
     * @param null|ISO31663Code $iso31663Code The ISO 3166-3 code
     *
     * @return self
     */
    public function setIso31663Code(?ISO31663Code $iso31663Code): self
    {
        $this->iso31663Code = $iso31663Code;

        return $this;
    }
}
