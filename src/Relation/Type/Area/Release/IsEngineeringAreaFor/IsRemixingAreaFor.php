<?php

namespace MusicBrainz\Relation\Type\Area\Release\IsEngineeringAreaFor;

use MusicBrainz\Value\EntityType;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Area\Release\IsEngineeringAreaFor;

/**
 * An "is remixing area for" relation
 * Links a release to the area it was remixed in. Only used when the place is unknown.
 *
 * @link https://musicbrainz.org/relationship/5147db55-6240-4479-bfa9-0589455f1c50
 */
class IsRemixingAreaFor extends IsEngineeringAreaFor
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('remixed in');
    }
}
