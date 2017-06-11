<?php

namespace MusicBrainz\Value;

/**
 * A catalog number
 */
class CatalogNumber
{
    /**
     * A catalog number
     *
     * @var string
     */
    private $code;

    /**
     * Constructs a catalog number.
     *
     * @param string $code A catalog number
     */
    public function __construct(string $code = '')
    {
        $this->code = $code;
    }

    /**
     * Returns the catalog number as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->code;
    }
}
