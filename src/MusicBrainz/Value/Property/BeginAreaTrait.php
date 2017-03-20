<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\Area;
use MusicBrainz\Value\ArtistType;

/**
 * Provides a getter for the beginning area.
 */
trait BeginAreaTrait
{
    /**
     * The begin area indicates where an artist started its existence. Its exact meaning depends on the type of artist:
     *
     * - For a person: The person's birthplace
     * - For a group (or orchestra/choir): The area where the group first formed
     *
     * @var Area
     *
     * @see ArtistType
     */
    private $beginArea;

    /**
     * Returns the artist's begin area.
     *
     * @return Area
     */
    public function getBeginArea(): Area
    {
        return $this->beginArea;
    }
}
