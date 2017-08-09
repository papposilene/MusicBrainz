<?php

namespace MusicBrainz\Relation\Type\Artist\Url\HasPageInOtherDatabaseAt;

use MusicBrainz\Relation\Type\Artist\Url\HasPageInOtherDatabaseAt;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "has setlist.fm page at" relation
 * This relationship type links an artist to its corresponding page at setlist.fm.
 *
 * @see  https://www.setlist.fm/
 * @link https://musicbrainz.org/relationship/bf5d0d5e-27a1-4e94-9df7-3cdc67b3b207
 */
class HasSetlistFmPageAt extends HasPageInOtherDatabaseAt
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('setlistfm');
    }
}
