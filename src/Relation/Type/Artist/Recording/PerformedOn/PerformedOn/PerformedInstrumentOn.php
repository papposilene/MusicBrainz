<?php

namespace MusicBrainz\Relation\Type\Artist\Recording\PerformedOn\PerformedOn;

use MusicBrainz\Relation\Type\Artist\Recording\PerformedOn\PerformedOn;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "performed instrument on" relation
 * Indicates an artist that performed one or more instruments on this recording.
 *
 * @link https://musicbrainz.org/relationship/59054b12-01ac-43ee-a618-285fd397e461
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
