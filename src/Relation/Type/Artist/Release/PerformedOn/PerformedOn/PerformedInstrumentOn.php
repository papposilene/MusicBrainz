<?php

namespace MusicBrainz\Relation\Type\Artist\Release\PerformedOn\PerformedOn;

use MusicBrainz\Relation\Type\Artist\Release\PerformedOn\PerformedOn;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "performed instrument on" relation
 * Indicates an artist that performed one or more instruments on this release.
 *
 * @link https://musicbrainz.org/relationship/67555849-61e5-455b-96e3-29733f0115f5
 */
class PerformedInstrumentOn extends PerformedOn
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('instrument');
    }
}
