<?php

namespace MusicBrainz\Relation\Type\Artist\Url\OtherDatabases;

use MusicBrainz\Relation\Type\Artist\Url\OtherDatabases;
use MusicBrainz\Value\Name;

/**
 * This links an artist to its page in IMDb.
 *
 * @see  http://www.imdb.com/
 * @link https://musicbrainz.org/relationship/94c8b0cc-4477-4106-932c-da60e63de61c
 */
class Imdb extends OtherDatabases
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
