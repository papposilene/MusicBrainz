<?php

namespace MusicBrainz\Relation\Type\Area\Work\WrittenIn;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Area\Work\WrittenIn;

/**
 * A "is revising area for" relation
 * This links a work with the area it was revised in.
 *
 * @link https://musicbrainz.org/relationship/4dd0d181-8df0-47d4-9f5f-0b63d05b64cb
 */
class IsRevisingAreaFor extends WrittenIn
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
