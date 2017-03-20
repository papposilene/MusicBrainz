<?php

namespace MusicBrainz\Value\Accessor;

use MusicBrainz\Value\Length;

/**
 * Provides a getter for the length.
 */
trait GetLengthTrait
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
