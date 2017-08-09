<?php

namespace MusicBrainz\Relation\Type\Artist\Work\HadMiscRoleOn;

use MusicBrainz\Relation\Type\Artist\Work\HadMiscRoleOn;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "is dedicated by" relation
 * This indicates the work is dedicated to a specific person. This is most common for classical works, but also exists
 * in other genres to a degree.
 *
 * @link https://musicbrainz.org/relationship/26131498-00e8-4136-b937-22a4be01a63d
 */
class IsDedicatedBy extends HadMiscRoleOn
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('dedication');
    }
}
