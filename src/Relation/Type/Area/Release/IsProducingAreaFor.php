<?php

namespace MusicBrainz\Relation\Type\Area\Release;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type;

/**
 * An "is producing area for" relation
 * Links a release to the area it was produced in. Only used when the place is unknown.
 *
 * @link https://musicbrainz.org/relationship/8d60be20-959c-4f5b-85f6-2b1f44321d11
 */
class IsProducingAreaFor extends Type\Area\Release
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('produced in');
    }
}
