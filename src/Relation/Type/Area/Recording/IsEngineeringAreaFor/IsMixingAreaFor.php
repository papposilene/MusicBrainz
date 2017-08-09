<?php

namespace MusicBrainz\Relation\Type\Area\Recording\IsEngineeringAreaFor;

use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Area\Recording\IsEngineeringAreaFor;

/**
 * An "is mixing area for" relation
 * Links a recording to the area it was mixed in. Only used when the place is unknown.
 *
 * @link https://musicbrainz.org/relationship/eef56d04-852a-4ce6-bfc9-678c19392a16
 */
class IsMixingAreaFor extends IsEngineeringAreaFor
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('mixed in');
    }
}
