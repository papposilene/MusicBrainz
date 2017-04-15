<?php

namespace MusicBrainz\Value;

/**
 * A "cancelled" flag
 */
class Cancelled
{
    /**
     * True, if cancelled, otherwise false
     *
     * @var bool
     */
    private $cancelled;

    /**
     * Constructs a "cancelled" flag.
     *
     * @param bool $cancelled True, if cancelled
     */
    public function __construct(bool $cancelled = false)
    {
        $this->cancelled = $cancelled;
    }

    /**
     * Returns the string "true", if cancelled, otherwise "false".
     *
     * @return string
     */
    public function __toString(): string
    {
        return (string) $this->cancelled;
    }
}
