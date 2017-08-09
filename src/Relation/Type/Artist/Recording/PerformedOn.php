<?php

namespace MusicBrainz\Relation\Type\Artist\Recording;

use MusicBrainz\Relation\Type\Artist\Recording;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "performed on" relation
 *
 * @link https://musicbrainz.org/relationship/f8673e29-02a5-47b7-af61-dd4519328dd0
 */
abstract class PerformedOn extends Recording
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
