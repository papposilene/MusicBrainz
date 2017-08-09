<?php

namespace MusicBrainz\Relation\Type\Artist\Url\HasPageInOtherDatabaseAt;

use MusicBrainz\Relation\Type\Artist\Url\HasPageInOtherDatabaseAt;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "has BookBrainz page at" relation
 * This relationship type links an artist to its corresponding page at Bandsintown.
 *
 * @see  https://bookbrainz.org
 * @link https://musicbrainz.org/relationship/f82f9342-a08d-46b7-ab7a-d8b6330c805d
 */
class HasBookBrainzPageAt extends HasPageInOtherDatabaseAt
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('BookBrainz');
    }
}
