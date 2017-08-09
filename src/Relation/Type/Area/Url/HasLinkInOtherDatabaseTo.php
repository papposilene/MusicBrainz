<?php

namespace MusicBrainz\Relation\Type\Area\Url;

use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Area\Url;

/**
 * An "has other databases link to" relation
 * This links an area to the equivalent entry in another database.
 *
 * @link https://musicbrainz.org/relationship/b879051b-10e6-43b4-a49a-efdecc695f02
 */
class HasLinkInOtherDatabaseTo extends Url
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('other databases');
    }
}
