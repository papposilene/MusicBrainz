<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\SectorOffsetList;

/**
 * Provides a getter for a list of sector offsets.
 */
trait SectorOffsetsTrait
{
    /**
     * A list of sector offsets
     *
     * @var SectorOffsetList
     */
    private $sectorOffsets;

    /**
     * Returns a list of sector offsets.
     *
     * @return SectorOffsetList
     */
    public function getSectorOffsets(): SectorOffsetList
    {
        return $this->sectorOffsets;
    }
}
