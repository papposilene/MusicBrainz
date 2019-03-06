<?php

namespace MusicBrainz\Relation\Type\Area\Recording\EngineeredIn;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Area\Recording\EngineeredIn;

/**
 * Links a recording to the area it was remixed in. Only used when the place is unknown.
 *
 * @link https://musicbrainz.org/relationship/582f6452-ff89-4f3b-9e78-eff5b842e208
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
