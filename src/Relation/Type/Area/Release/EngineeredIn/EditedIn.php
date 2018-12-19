<?php

namespace MusicBrainz\Relation\Type\Area\Release\EngineeredIn;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Area\Release\EngineeredIn;

/**
 * Links a release to the area it was edited in. Only used when the place is unknown.
 *
 * @link https://musicbrainz.org/relationship/e42af9dd-4203-480c-9178-ee4f67ba2609
 */
class EditedIn extends EngineeredIn
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
