<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\Length;

/**
 * Provides a getter for the length.
 */
trait LengthTrait
{
    /**
     * A length
     *
     * @var Length
     */
    private $length;

    /**
     * Returns the length.
     *
     * @return Length
     */
    public function getLength(): Length
    {
        return $this->length;
    }
}
