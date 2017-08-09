<?php

namespace MusicBrainz\Relation\Type\Artist\Recording\PerformedOn;

use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "performed on" relation
 * Indicates an artist that performed on this recording.
 *
 * @link https://musicbrainz.org/relationship/628a9658-f54c-4142-b0c0-95f031b544da
 */
class PerformedOn extends \MusicBrainz\Relation\Type\Artist\Recording\PerformedOn
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('performer');
    }
}
