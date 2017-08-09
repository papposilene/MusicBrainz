<?php

namespace MusicBrainz\Relation\Type\Artist\Url\HasMusicAt;

use MusicBrainz\Relation\Type\Artist\Url\HasMusicAt;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "has CD Baby page at" relation
 * This links an artist to its page at CD Baby.
 *
 * @see  https://www.cdbaby.com
 * @link https://musicbrainz.org/relationship/4c21e5f5-2960-4abc-88a1-62ce491bb96e
 */
class HasCdBabyPageAt extends HasMusicAt
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('CD Baby');
    }
}
