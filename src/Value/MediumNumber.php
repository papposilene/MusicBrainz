<?php

namespace MusicBrainz\Value;

use MusicBrainz\Value;

/**
 * A medium number
 */
class MediumNumber implements Value
{
    /**
     * The track number
     *
     * @var null|int
     */
    private $number;

    /**
     * Constructs a medium number.
     *
     * @param int $number A medium number
     */
    public function __construct(?int $number = null)
    {
        $this->number = $number;
    }

    /**
     * Returns the medium number as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return ($this->number) ? $this->number : '';
    }
}
