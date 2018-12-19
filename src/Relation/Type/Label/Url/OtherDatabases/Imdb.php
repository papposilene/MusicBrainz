<?php

namespace MusicBrainz\Relation\Type\Label\Url\OtherDatabases;

use MusicBrainz\Relation\Type\Label\Url\OtherDatabases;
use MusicBrainz\Value\Name;

/**
 * This links a label to its page in IMDb.
 *
 * @see  http://www.imdb.com/
 * @link https://musicbrainz.org/relationship/dfd36bc7-0c06-49fa-8b79-96978778c716
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
