<?php

namespace MusicBrainz\Relation\Type\Event\Url\OtherDatabases;

use MusicBrainz\Relation\Type\Event\Url\OtherDatabases;
use MusicBrainz\Value\Name;

/**
 * A "has Last.fm page at" relation
 * This relationship type links an event to its corresponding page at Last.fm.
 *
 * @see  https://www.last.fm
 * @link https://musicbrainz.org/relationship/fd86b01d-c8f7-4f0a-a077-81855a9cfeef
 */
class LastFm extends OtherDatabases
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
