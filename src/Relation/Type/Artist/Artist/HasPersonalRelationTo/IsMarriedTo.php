<?php

namespace MusicBrainz\Relation\Type\Artist\Artist\HasPersonalRelationTo;

use MusicBrainz\Relation\Type\Artist\Artist\HasPersonalRelationTo;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "is married to" relation
 * This links artists who were married.
 *
 * https://musicbrainz.org/relationship/b2bf7a5d-2da6-4742-baf4-e38d8a7ad029
 */
class IsMarriedTo extends HasPersonalRelationTo
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('married');
    }
}
