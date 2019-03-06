<?php

namespace MusicBrainz\Relation\Type\Recording\Url\OtherDatabases;

use MusicBrainz\Relation\Type\Recording\Url\OtherDatabases;
use MusicBrainz\Value\Name;

/**
 * This is used to link a recording to its corresponding page on Allmusic.
 *
 * @see  http://www.allmusic.com
 * @link https://musicbrainz.org/relationship/54482490-5ff1-4b1c-9382-b4d0ef8e0eac
 */
class Allmusic extends OtherDatabases
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('allmusic');
    }
}
