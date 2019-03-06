<?php

namespace MusicBrainz\Relation\Type\Area\Release\EngineeredIn;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Area\Release\EngineeredIn;

/**
 * Links a release to the area it was remixed in. Only used when the place is unknown.
 *
 * @link https://musicbrainz.org/relationship/5147db55-6240-4479-bfa9-0589455f1c50
 */
class RemixedIn extends EngineeredIn
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
