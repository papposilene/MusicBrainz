<?php

namespace MusicBrainz\Relation\Type\Url\Work\OtherDatabases;

use MusicBrainz\Relation\Type\Url\Work\OtherDatabases;
use MusicBrainz\Value\Name;

/**
 * This relationship type links an artist to its corresponding page at setlist.fm.
 *
 * @see  https://www.setlist.fm/
 * @link https://musicbrainz.org/relationship/bf5d0d5e-27a1-4e94-9df7-3cdc67b3b207
 */
class Setlistfm extends OtherDatabases
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
