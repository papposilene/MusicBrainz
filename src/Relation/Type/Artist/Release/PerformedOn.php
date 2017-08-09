<?php

namespace MusicBrainz\Relation\Type\Artist\Release;

use MusicBrainz\Relation\Type\Artist\Release;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "performed on" relation
 *
 * @link https://musicbrainz.org/relationship/8db9d0b7-ca39-43a6-8c72-9a47f811229e
 */
abstract class PerformedOn extends Release
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('performance');
    }
}
