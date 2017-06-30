<?php

namespace MusicBrainz\Value;

use MusicBrainz\Value;

/**
 * A "primary name" flag
 */
class PrimaryName implements Value
{
    /**
     * True, if the name is a primary name, otherwise false
     *
     * @var bool
     */
    private $primaryName;

    /**
     * Constructs a "primary name" flag.
     *
     * @param bool $primaryName True, if the name is a primary name, otherwise false
     */
    public function __construct(bool $primaryName = false)
    {
        $this->primaryName = $primaryName;
    }

    /**
     * Returns the string "true", if the name is a primary name, otherwise "false".
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->primaryName;
    }
}
