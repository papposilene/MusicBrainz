<?php
namespace MusicBrainz\Value\Property;

use MusicBrainz\Helper\ArrayAccess;
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

    /**
     * Sets the list of sector offsets by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setSectorOffsetsFromArray(array $input): void
    {
        $this->sectorOffsets = is_null($sectorOffsets = ArrayAccess::getArray($input, 'sectors'))
            ? new SectorOffsetList
            : new SectorOffsetList($sectorOffsets);
    }
}
