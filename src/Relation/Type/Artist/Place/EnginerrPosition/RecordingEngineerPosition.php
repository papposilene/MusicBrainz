<?php

namespace MusicBrainz\Relation\Type\Artist\Place\EnginerrPosition;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Artist\Place;

/**
 * Describes the fact a person was contracted by a place as a recording engineer.
 *
 * @link https://musicbrainz.org/relationship/350f7ab7-c2d9-4f00-98e0-e1973bf4a2bf
 */
class RecordingEngineerPosition extends Place
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('recording engineer position');
    }
}
