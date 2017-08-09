<?php

namespace MusicBrainz\Relation\Type\Artist\Place;

use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Artist\Place;

/**
 * An "is primary concert venue of" relation
 * This is used to link an artist to its primary concert venue.
 *
 * @link https://musicbrainz.org/relationship/fff4640a-0819-49e9-92c5-1e3b5134fd95
 */
class IsPrimaryConcertVenueOf extends Place
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('primary concert venue');
    }
}
