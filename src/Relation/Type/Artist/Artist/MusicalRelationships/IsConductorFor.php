<?php

namespace MusicBrainz\Relation\Type\Artist\Artist\MusicalRelationships;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Artist\Artist\MusicalRelationships;

/**
 * An "is conductor for" relation
 * This indicates that a person is, or was, a conductor for a group.
 *
 * @link https://musicbrainz.org/relationship/cac01ac7-4159-42fd-9f2b-c5a7a5624079
 */
class IsConductorFor extends MusicalRelationships
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('conductor position');
    }
}
