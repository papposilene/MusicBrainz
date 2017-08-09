<?php

namespace MusicBrainz\Relation\Type\Artist\Url;

use MusicBrainz\Relation\Type\Artist\Url;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "has online data at" relation
 *
 * @link https://musicbrainz.org/relationship/07ae9b01-c09a-4460-8693-85479c1e96c3
 */
abstract class HasOnlineDataAt extends Url
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
