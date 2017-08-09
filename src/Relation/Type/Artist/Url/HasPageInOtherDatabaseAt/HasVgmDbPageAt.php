<?php

namespace MusicBrainz\Relation\Type\Artist\Url\HasPageInOtherDatabaseAt;

use MusicBrainz\Relation\Type\Artist\Url\HasPageInOtherDatabaseAt;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "has VGMdb page at" relation
 * This relationship type links an artist to its corresponding page at VGMdb. VGMdb is a community project dedicated to
 * cataloguing the music of video games and anime.
 *
 * @see  http://vgmdb.net
 * @link https://musicbrainz.org/relationship/0af15ab3-c615-46d6-b95b-a5fcd2a92ed9
 */
class HasVgmDbPageAt extends HasPageInOtherDatabaseAt
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('vgmdb');
    }
}
