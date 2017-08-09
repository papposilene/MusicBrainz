<?php

namespace MusicBrainz\Relation\Type\Area\Url\HasLinkInOtherDatabaseTo;

use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Area\Url\HasLinkInOtherDatabaseTo;

/**
 * A "has geonames page" relation
 * Points to the Geonames page for this area.
 *
 * @link https://musicbrainz.org/relationship/c52f14c0-e9ac-4a8a-8f7a-c47328de168f
 */
class HasGeonamesPage extends HasLinkInOtherDatabaseTo
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('geonames');
    }
}
