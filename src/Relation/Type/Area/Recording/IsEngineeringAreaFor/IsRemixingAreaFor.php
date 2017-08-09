<?php

namespace MusicBrainz\Relation\Type\Area\Recording\IsEngineeringAreaFor;

use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Area\Recording\IsEngineeringAreaFor;

/**
 * An "is remixing area for" relation
 * Links a recording to the area it was remixed in. Only used when the place is unknown.
 *
 * @link https://musicbrainz.org/relationship/582f6452-ff89-4f3b-9e78-eff5b842e208
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
