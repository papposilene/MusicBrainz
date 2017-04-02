<?php

namespace MusicBrainz\Filter\Property;

use MusicBrainz\Value\MBID;

/**
 * Provides accessors for the MusicBrainz Identifier (MBID) of the area.
 */
trait AreaIdTrait
{
    /**
     * The MusicBrainz Identifier (MBID) of the area.
     *
     * @var null|MBID
     */
    private $areaId;

    /**
     * Returns the MusicBrainz Identifier (MBID) of the area.
     *
     * @return null|MBID
     */
    public function getAreaId(): ?MBID
    {
        return $this->areaId;
    }

    /**
     * Sets the MusicBrainz Identifier (MBID) of the area.
     *
     * @param null|MBID $areaId The MusicBrainz Identifier (MBID) of the area
     *
     * @return self
     */
    public function setAreaId(?MBID $areaId): self
    {
        $this->areaId = $areaId;

        return $this;
    }
}
