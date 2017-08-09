<?php

namespace MusicBrainz\Relation\Type\Artist\Url\HasPageInOtherDatabaseAt;

use MusicBrainz\Relation\Type\Artist\Url\HasPageInOtherDatabaseAt;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "has AllMusic page at" relation
 * This is used to link an artist to its corresponding page on Allmusic.
 *
 * @see  http://www.allmusic.com
 * @link https://musicbrainz.org/relationship/6b3e3c85-0002-4f34-aca6-80ace0d7e846
 */
class HasAllMusicPageAt extends HasPageInOtherDatabaseAt
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
