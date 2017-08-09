<?php

namespace MusicBrainz\Relation\Type\Artist\Url\HasPageInOtherDatabaseAt;

use MusicBrainz\Relation\Type\Artist\Url\HasPageInOtherDatabaseAt;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "has Last.fm page at" relation
 * This relationship type links an artist to its corresponding page at Last.fm
 *
 * @see  https://www.last.fm
 * @link https://musicbrainz.org/relationship/08db8098-c0df-4b78-82c3-c8697b4bba7f
 */
class HasLasFmPageAt extends HasPageInOtherDatabaseAt
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('last.fm');
    }
}
