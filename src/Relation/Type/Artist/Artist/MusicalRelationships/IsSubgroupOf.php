<?php

namespace MusicBrainz\Relation\Type\Artist\Artist\MusicalRelationships;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Artist\Artist\MusicalRelationships;

/**
 * An "is subgroup of" relation
 * This links a subgroup to the group from which it was created. This relationship type is the functional equivalent of
 * the "member of band" type for group-group relationships.
 *
 * @see  IsMemberOfBand
 * @link https://musicbrainz.org/relationship/7802f96b-d995-4ce9-8f70-6366faad758e
 */
class IsSubgroupOf extends MusicalRelationships
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('subgroup');
    }
}
