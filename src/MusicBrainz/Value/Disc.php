<?php

namespace MusicBrainz\Value;

/**
 * A disc
 */
class Disc
{
    use Property\DiscIdTrait;
    use Property\SectorsTrait;
    use Property\SectorOffsetsTrait;

    /**
     * Constructs a disc.
     *
     * @param array $disc Information about the disc
     */
    public function __construct(array $disc = [])
    {
        $this->discId        = new DiscId(isset($disc['id']) ? $disc['id'] : '');
        $this->sectors       = new Sectors(isset($disc['sectors']) ? $disc['sectors'] : 0);
        $this->sectorOffsets = new SectorOffsetList(isset($disc['offsets']) ? $disc['offsets'] : []);
    }

    /**
     * Returns the disc ID as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->getDiscId();
    }
}
