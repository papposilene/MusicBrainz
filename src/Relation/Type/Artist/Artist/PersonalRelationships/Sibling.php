<?php

namespace MusicBrainz\Relation\Type\Artist\Artist\PersonalRelationships;

use MusicBrainz\Relation\Type\Artist\Artist\PersonalRelationships;
use MusicBrainz\Value\Name;

/**
 * This links two siblings (brothers or sisters).
 *
 * https://musicbrainz.org/relationship/b42b7966-b904-449e-b8f9-8c7297b863d0
 */
class Sibling extends PersonalRelationships
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
