<?php

namespace MusicBrainz\Value;

/**
 * A track number
 */
class TrackNumber
{
    /**
     * The track number
     *
     * @var null|int
     */
    private $number;

    /**
     * Constructs a barcode.
     *
     * @param int $number A track number
     */
    public function __construct(?int $number = null)
    {
        $this->number = $number;
    }

    /**
     * Returns the track number as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return ($this->number) ? (string) $this->number : '';
    }
}
