<?php

namespace MusicBrainz\Value;

/**
 * A length
 */
class Length
{
    /**
     * The length in milli seconds
     *
     * @var string
     */
    private $length;

    /**
     * Constructs a length.
     *
     * @param int $length The length
     */
    public function __construct(int $length = 0)
    {
        $this->length = $length;
    }

    /**
     * Returns the string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return date('i:s', floor($this->length/1000));
    }
}
