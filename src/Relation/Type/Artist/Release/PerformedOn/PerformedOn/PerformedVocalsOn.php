<?php

namespace MusicBrainz\Relation\Type\Artist\Release\PerformedOn\PerformedOn;

use MusicBrainz\Relation\Type\Artist\Release\PerformedOn\PerformedOn;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "performed vocals on" relation
 * Indicates an artist that performed vocals on this release.
 *
 * @link https://musicbrainz.org/relationship/0fdbe3c6-7700-4a31-ae54-b53f06ae1cfa
 */
class PerformedVocalsOn extends PerformedOn
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('vocal');
    }
}
