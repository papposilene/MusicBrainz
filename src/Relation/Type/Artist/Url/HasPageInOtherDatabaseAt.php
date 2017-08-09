<?php

namespace MusicBrainz\Relation\Type\Artist\Url;

use MusicBrainz\Relation\Type\Artist\Url;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "has page in other databases at" relation
 *
 * @link https://musicbrainz.org/relationship/d94fb61c-fa20-4e3c-a19a-71a949fb2c55
 */
class HasPageInOtherDatabaseAt extends Url
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
