<?php

namespace MusicBrainz\Relation\Type\Artist\Artist\HasPersonalRelationTo;

use MusicBrainz\Relation\Type\Artist\Artist\HasPersonalRelationTo;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "is parent of" relation
 * Indicates a parent-child relationship.
 *
 * https://musicbrainz.org/relationship/9421ca84-934f-49fe-9e66-dea242430406
 */
class IsParentOf extends HasPersonalRelationTo
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('parent');
    }
}
