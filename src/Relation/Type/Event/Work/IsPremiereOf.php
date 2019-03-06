<?php

namespace MusicBrainz\Relation\Type\Event\Work;

use MusicBrainz\Relation\Type\Event\Url;
use MusicBrainz\Value\Name;

/**
 * An "is premiere of" relation
 * Indicates the event where the work had its first performance.
 *
 * @link https://musicbrainz.org/relationship/8cfc7355-186b-477b-b55d-4c20f63d0927
 */
class IsPremiereOf extends Url
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('official homepage');
    }
}
