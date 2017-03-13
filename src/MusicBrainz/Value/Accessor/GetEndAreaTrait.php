<?php

namespace MusicBrainz\Value\Accessor;

use MusicBrainz\Value\Area;
use MusicBrainz\Value\ArtistType;

/**
 * Provides a getter for the ending area.
 */
trait GetEndAreaTrait
{
    /**
     * The end area indicates where an artist started its existence. Its exact meaning depends on the type of artist:
     *
     * - For a person: The person's place of death
     * - For a group (or orchestra/choir): The area when the group last dissolved
     * - For a character: The area (in real life) where the character concept was created
     * - For others: There are no clear indications about how to use dates for artists of the type "Other" at the moment.
     *
     * @var Area
     *
     * @see ArtistType
     */
    private $endArea;

    /**
     * Returns the artist's end area.
     *
     * @return Area
     */
    public function getEndArea(): Area
    {
        return $this->endArea;
    }
}
