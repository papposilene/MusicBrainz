<?php

namespace MusicBrainz\Relation\Type\Area\Release;

use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Area\Release;

/**
 * An "is arranging area for" relation
 * Links a release to the area it was arranged in. Only used when the place is unknown.
 *
 * @link https://musicbrainz.org/relationship/d59c5121-7d6c-4965-9fa8-ab47b7d59012
 */
class IsArrangingAreaFor extends Release
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('arranged in');
    }
}
