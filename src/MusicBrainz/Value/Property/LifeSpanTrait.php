<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\LifeSpan;

/**
 * Provides a getter for a life span.
 */
trait LifeSpanTrait
{
    /**
     * The artist's life span
     *
     * @var LifeSpan
     */
    private $lifeSpan;

    /**
     * Returns the artist's life span.
     *
     * @return LifeSpan
     */
    public function getLifeSpan(): LifeSpan
    {
        return $this->lifeSpan;
    }
}
