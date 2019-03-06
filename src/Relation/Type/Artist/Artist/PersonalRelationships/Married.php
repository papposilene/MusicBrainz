<?php

namespace MusicBrainz\Relation\Type\Artist\Artist\PersonalRelationships;

use MusicBrainz\Relation\Type\Artist\Artist\PersonalRelationships;
use MusicBrainz\Value\Name;

/**
 * This links artists who were married.
 *
 * https://musicbrainz.org/relationship/b2bf7a5d-2da6-4742-baf4-e38d8a7ad029
 */
class Married extends PersonalRelationships
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
