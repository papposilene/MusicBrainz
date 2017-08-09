<?php

namespace MusicBrainz\Relation\Type\Artist\Url\HasPageInOtherDatabaseAt;

use MusicBrainz\Relation\Type\Artist\Url\HasPageInOtherDatabaseAt;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "has Wikipedia page at" relation
 * Points to the Wikipedia page for this artist.
 *
 * @see  https://www.wikipedia.org
 * @link https://musicbrainz.org/relationship/29651736-fa6d-48e4-aadc-a557c6add1cb
 */
class HasWikipediaPageAt extends HasPageInOtherDatabaseAt
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('wikipedia');
    }
}
