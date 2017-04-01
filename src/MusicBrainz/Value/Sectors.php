<?php

namespace MusicBrainz\Value;

/**
 * A number of sectors
 */
class Sectors
{
    /**
     * The number of sectors
     *
     * @var int
     */
    private $sectors;

    /**
     * Constructs a number of sectors.
     *
     * @param int $sectors The sectors
     */
    public function __construct(int $sectors = 0)
    {
        $this->sectors = $sectors;
    }

    /**
     * Returns the number of sectors as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return (string) $this->sectors;
    }
}
