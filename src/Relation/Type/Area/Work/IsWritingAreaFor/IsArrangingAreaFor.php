<?php

namespace MusicBrainz\Relation\Type\Area\Work\IsWritingAreaFor;

use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Area\Work\IsWritingAreaFor;

/**
 * A "is arranging area for" relation
 * This links a work with the area it was arranged in.
 *
 * @link https://musicbrainz.org/relationship/468ec917-4be7-4a9a-8dbd-e740d049c5a2
 */
class IsArrangingAreaFor extends IsWritingAreaFor
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
