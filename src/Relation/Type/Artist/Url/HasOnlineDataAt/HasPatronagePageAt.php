<?php

namespace MusicBrainz\Relation\Type\Artist\Url\HasOnlineDataAt;

use MusicBrainz\Relation\Type\Artist\Url\HasOnlineDataAt;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "has cound founding page at" relation
 * This links an artist to a site where the artist can receive donations/patronage, such as Flattr or PayPal.me.
 *
 * @link https://musicbrainz.org/relationship/6f77d54e-1d81-4e1a-9ea5-37947577151b
 */
class HasPatronagePageAt extends HasOnlineDataAt
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('patronage');
    }
}
