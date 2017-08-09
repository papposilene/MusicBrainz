<?php

namespace MusicBrainz\Relation\Type\Artist\Url\HasPageInOtherDatabaseAt;

use MusicBrainz\Relation\Type\Artist\Url\HasPageInOtherDatabaseAt;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "has Songkick page at" relation
 * This relationship type links an artist to its corresponding page at Songkick.
 *
 * @see  https://www.songkick.com
 * @link https://musicbrainz.org/relationship/aac9c4bc-a5b9-30b8-9839-e3ac314c6e58
 */
class HasSongkickPageAt extends HasPageInOtherDatabaseAt
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('songkick');
    }
}
