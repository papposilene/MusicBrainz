<?php

namespace MusicBrainz\Relation\Type\Area\Recording;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Area\Recording;

/**
 * Links a recording to the area it was engineered in. Only used when the place is unknown.
 *
 * @link https://musicbrainz.org/relationship/aede7c5e-8bd3-4f07-bad2-c3d159e8c1c5
 */
class EngineeredIn extends Recording
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('engineered in');
    }
}
