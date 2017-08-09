<?php

namespace MusicBrainz\Relation\Type\Area\Release;

use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Area\Release;

/**
 * An "is engineering area for" relation
 * Links a release to the area it was engineered in. Only used when the place is unknown.
 *
 * @link https://musicbrainz.org/relationship/3a24272b-3273-456a-9be8-421580513d4b
 */
class IsEngineeringAreaFor extends Release
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
