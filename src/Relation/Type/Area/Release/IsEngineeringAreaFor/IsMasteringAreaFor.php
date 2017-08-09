<?php

namespace MusicBrainz\Relation\Type\Area\Release\IsEngineeringAreaFor;

use MusicBrainz\Value\EntityType;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Area\Release\IsEngineeringAreaFor;

/**
 * An "is mastering are for" relation
 * Links a release to the area it was mastered in. Only used when the place is unknown.
 *
 * @link https://musicbrainz.org/relationship/ee380877-3636-462b-b407-ab39370a787e
 */
class IsMasteringAreaFor extends IsEngineeringAreaFor
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('mastered in');
    }
}
