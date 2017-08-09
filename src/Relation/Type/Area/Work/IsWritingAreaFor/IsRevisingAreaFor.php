<?php

namespace MusicBrainz\Relation\Type\Area\Work\IsWritingAreaFor;

use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Area\Work\IsWritingAreaFor;

/**
 * A "is revising area for" relation
 * This links a work with the area it was revised in.
 *
 * @link https://musicbrainz.org/relationship/4dd0d181-8df0-47d4-9f5f-0b63d05b64cb
 */
class IsRevisingAreaFor extends IsWritingAreaFor
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('revised in');
    }
}
