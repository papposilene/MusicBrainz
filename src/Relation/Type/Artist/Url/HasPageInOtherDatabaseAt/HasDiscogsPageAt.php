<?php

namespace MusicBrainz\Relation\Type\Artist\Url\HasPageInOtherDatabaseAt;

use MusicBrainz\Relation\Type\Artist\Url\HasPageInOtherDatabaseAt;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "has Discogs page at" relation
 * This is used to link the Discogs page for this artist.
 *
 * @see  https://www.discogs.com/
 * @link https://musicbrainz.org/relationship/04a5b104-a4c2-4bac-99a1-7b837c37d9e4
 */
class HasDiscogsPageAt extends HasPageInOtherDatabaseAt
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('discogs');
    }
}
