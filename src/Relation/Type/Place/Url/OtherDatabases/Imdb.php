<?php

namespace MusicBrainz\Relation\Type\Place\Url\OtherDatabases;

use MusicBrainz\Relation\Type\Place\Url\OtherDatabases;
use MusicBrainz\Value\Name;

/**
 * Points to the Internet Movie Database page for this place.
 *
 * @see  http://www.imdb.com/
 * @link https://musicbrainz.org/relationship/815bc5ca-c2fb-4dc6-a89b-9150888b0d4d
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
