<?php

namespace MusicBrainz\Relation\Type\Artist\Release\PerformedOn;

use MusicBrainz\Relation\Type\Artist\Release\PerformedOn;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "performs as conductor on" relation
 * This indicates an artist who conducted an orchestra, band or choir on this release.
 *
 * @link https://musicbrainz.org/relationship/9ae9e4d0-f26b-42fb-ab5c-1149a47cf83b
 */
class PerformsAsConductorOn extends PerformedOn
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('conductor');
    }
}
