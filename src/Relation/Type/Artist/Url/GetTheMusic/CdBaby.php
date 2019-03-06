<?php

namespace MusicBrainz\Relation\Type\Artist\Url\GetTheMusic;

use MusicBrainz\Relation\Type\Artist\Url\GetTheMusic;
use MusicBrainz\Value\Name;

/**
 * This links an artist to its page at CD Baby.
 *
 * @see  https://www.cdbaby.com
 * @link https://musicbrainz.org/relationship/4c21e5f5-2960-4abc-88a1-62ce491bb96e
 */
class CdBaby extends GetTheMusic
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
