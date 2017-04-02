<?php

namespace MusicBrainz\Filter\Property;

use MusicBrainz\Value\ISO31661Code;

/**
 * Provides accessors for an ISO 3166-1 code.
 */
trait ISO31661CodeTrait
{
    /**
     * The ISO 3166-1 code
     *
     * @var null|ISO31661Code
     */
    private $iso31661Code;

    /**
     * Returns the ISO 3166-1 code.
     *
     * @return null|ISO31661Code
     */
    public function getIso31661Code(): ?ISO31661Code
    {
        return $this->iso31661Code;
    }

    /**
     * Sets the ISO 3166-1 code.
     *
     * @param null|ISO31661Code $iso31661Code The ISO 3166-1 code
     *
     * @return self
     */
    public function setIso31661Code(?ISO31661Code $iso31661Code): self
    {
        $this->iso31661Code = $iso31661Code;

        return $this;
    }
}
