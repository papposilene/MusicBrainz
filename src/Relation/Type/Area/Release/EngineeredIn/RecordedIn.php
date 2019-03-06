<?php

namespace MusicBrainz\Relation\Type\Area\Release\EngineeredIn;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Area\Release\EngineeredIn;

/**
 * Links a release to the area it was recorded in. Only used when the place is unknown.
 *
 * @link https://musicbrainz.org/relationship/354043e1-bdc2-4c7f-b338-2bf9c1d56e88
 */
class RecordedIn extends EngineeredIn
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('recorded in');
    }
}
