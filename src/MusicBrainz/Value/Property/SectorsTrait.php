<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\Sectors;

/**
 * Provides a getter for a number of sectors.
 */
trait SectorsTrait
{
    /**
     * The number of sectors
     *
     * @var Sectors
     */
    private $sectors;

    /**
     * Returns the number of sectors.
     *
     * @return Sectors
     */
    public function getSectors(): Sectors
    {
        return $this->sectors;
    }
}
