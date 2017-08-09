<?php

namespace MusicBrainz\Relation\Type\Artist\Artist\HasPersonalRelationTo;

use MusicBrainz\Relation\Type\Artist\Artist\HasPersonalRelationTo;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "is sibling of" relation
 * This links two siblings (brothers or sisters).
 *
 * https://musicbrainz.org/relationship/b42b7966-b904-449e-b8f9-8c7297b863d0
 */
class IsSiblingOf extends HasPersonalRelationTo
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('sibling');
    }
}
