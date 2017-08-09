<?php

namespace MusicBrainz\Relation\Type\Artist\Url\HasPageInOtherDatabaseAt;

use MusicBrainz\Relation\Type\Artist\Url\HasPageInOtherDatabaseAt;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "has IMDb page at" relation
 * This links an artist to its page in IMDb.
 *
 * @see  http://www.imdb.com/
 * @link https://musicbrainz.org/relationship/94c8b0cc-4477-4106-932c-da60e63de61c
 */
class HasImdbPageAt extends HasPageInOtherDatabaseAt
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('IMDb');
    }
}
