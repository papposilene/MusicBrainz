<?php

namespace MusicBrainz\Relation\Type\Artist\Recording\Remixed;

use MusicBrainz\Relation\Type\Artist\Recording\Remixed;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "compiled on" relation
 * This links a DJ-mix to the artist who mixed it.
 *
 * @see  https://musicbrainz.org/doc/Terminology#Mix_terminology
 * @link https://musicbrainz.org/relationship/28338ee6-d578-485a-bb53-61dbfd7c6545
 */
class IsMixDjOn extends Remixed
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('mix-DJ');
    }
}
