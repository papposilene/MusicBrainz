<?php

namespace MusicBrainz\Relation\Type\Area\Release\IsEngineeringAreaFor;

use MusicBrainz\Value\EntityType;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Area\Release\IsEngineeringAreaFor;

/**
 * An "is mixing area" relation
 * Links a release to the area it was mixed in. Only used when the place is unknown.
 *
 * @link https://musicbrainz.org/relationship/653b7420-c418-4bdc-83a5-6b2f44a65915
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
