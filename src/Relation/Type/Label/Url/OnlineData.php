<?php

namespace MusicBrainz\Relation\Type\Label\Url;

use MusicBrainz\Relation\Type\Label\Url;
use MusicBrainz\Value\Name;

/**
 * An "has online data at" relation
 *
 * @link https://musicbrainz.org/relationship/5f82afae-0473-458d-9f17-8a2fa1ce7918
 */
abstract class OnlineData extends Url
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('online data');
    }
}
