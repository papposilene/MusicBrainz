<?php

namespace MusicBrainz\Filter\Property;

use MusicBrainz\Value\ISO31662Code;

/**
 * Provides accessors for an ISO 3166-2 code.
 */
trait ISO31662CodeTrait
{
    /**
     * The ISO 3166-2 code
     *
     * @var null|ISO31662Code
     */
    private $iso31662Code;

    /**
     * Returns the ISO 3166-2 code.
     *
     * @return null|ISO31662Code
     */
    public function getIso31662Code(): ?ISO31662Code
    {
        return $this->iso31662Code;
    }

    /**
     * Sets the ISO 3166-2 code.
     *
     * @param null|ISO31662Code $iso31662Code The ISO 3166-2 code
     *
     * @return self
     */
    public function setIso31662Code(?ISO31662Code $iso31662Code): self
    {
        $this->iso31662Code = $iso31662Code;

        return $this;
    }
}
