<?php

namespace MusicBrainz\Relation\Type\Area\Recording\EngineeredIn;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Area\Recording\EngineeredIn;

/**
 * An "is mixing area for" relation
 * Links a recording to the area it was mixed in. Only used when the place is unknown.
 *
 * @link https://musicbrainz.org/relationship/eef56d04-852a-4ce6-bfc9-678c19392a16
 */
class MixedIn extends EngineeredIn
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
