<?php

namespace MusicBrainz\Relation\Type\Area\Recording\IsEngineeringAreaFor;

use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Area\Recording\IsEngineeringAreaFor;

/**
 * An "is editing area for" relation
 * Links a recording to the area it was edited in. Only used when the place is unknown.
 *
 * @link https://musicbrainz.org/relationship/e24482da-f568-46ba-a428-9fa56615c7b2
 */
class IsEditingAreaFor extends IsEngineeringAreaFor
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('edited in');
    }
}
