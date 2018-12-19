<?php

namespace MusicBrainz\Relation\Type\Place\Release;

use MusicBrainz\Relation\Type\Place\Release;
use MusicBrainz\Value\Name;

/**
 * Links a release to the place it was engineered at.
 *
 * @link https://musicbrainz.org/relationship/3a24272b-3273-456a-9be8-421580513d4b
 */
class EngineeredAt extends Release
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
