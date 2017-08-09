<?php

namespace MusicBrainz\Relation\Type\Area\Recording;

use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Area\Recording;

/**
 * An "is arranging area for" relation
 * Links a recording to the area it was arranged in. Only used when the place is unknown.
 *
 * @link https://musicbrainz.org/relationship/4f4aa317-c3c4-4001-ac23-fb8cf0bc543c
 */
class IsArrangingAreaFor extends Recording
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
