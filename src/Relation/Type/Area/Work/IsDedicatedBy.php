<?php

namespace MusicBrainz\Relation\Type\Area\Work;

use MusicBrainz\Relation\Type\Area\Work;
use MusicBrainz\Value\EntityType;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "is dedicated by" relation
 * This indicates the work is dedicated to a specific area. This is most common for classical works, but also exists in
 * other genres to a degree.
 */
class IsDedicatedBy extends Work
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
